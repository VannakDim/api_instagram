<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;
use App\Models\Post;


class LikeController extends Controller
{
    public function getLike($postID){
        $post = Like::where('post_id', $postID)->with('user')->get();
        $users = $post->pluck('user');
        return response()->json(['data'=> $users], 200);
    }

    public function toggleLike($postID){
        $user = Auth::user();
        $post = Post::find($postID);
        $liked = $post->likes->contains('user_id', $user->id);
        if($liked){
            $post->likes()->where('user_id', $user->id)->delete();
            return response()->json(['message'=> 'Post disliked'],200);
        }else{
            $post->likes()->create([
                'user_id' => $user->id,
                'post_id' => $postID
            ]);
            return response()->json(['message'=> 'Post liked'], 200);
        }
    }
}
