<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request, $postId){
        $validate = $this->validate($request, [
            'comment' => 'required|string|max:255',
        ]);
        $user = Auth::user();
        $post = Post::find($postId);
        if(!$post){
            return response()->json(['error'=>'Post not found'],404);
        }

        $data = $request->all();
        $data['user_id'] = $user->id;
        $comment = $post->comments()->create($data);
        return response()->json(['comment' => $comment],200);
    }

    public function show($postId){
        $post = Post::find($postId);
        if(!$post){
            return response()->json(['error' => 'Post not found'], 404);
        }

        $comments = $post->comments()->with('user')->latest()->get();
        return response()->json(['comments' => $comments, 'success'=>true], 200);
    }

    public function update(Request $request, $id){
        $validate = $this->validate($request, [
            'comment' => 'required|string|max:255',
        ]);
        $user = Auth::user();
        $comment = Comment::find($id);
        if(!$comment){
            return response()->json(['error'=>'Comment not found'], 404);
        }

        if($comment->user_id != $user->id){
            return response()->json(['error'=>'Unauthorized'],401);
        }
        
        $comment->update($validate);
        return response()->json(['comment' => $comment], 200);
    }

    public function destroy($cmtId){
        $user = Auth::user();
        $comment = Comment::find($cmtId);
        if(!$comment){
            return response()->json(['error'=>'Comment not found'], 404);
        }
        if($comment->user_id != $user->id){
            return response()->json(['error'=>'Unauthorized'], 401);
        }
        $comment->delete();
        return response()->json(['message'=>'Comment deleted'], 200);
    }
}
