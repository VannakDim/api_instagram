<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class PostController extends Controller
{

    public function index(){
        $posts = Post::with('user')->latest()->paginate();
        foreach($posts as $post){
            $post->likes_count = $post->likes->count();
            $post->comments_count = $post->comments->count();
            $post->liked = $post->likes->contains('user_id', Auth::id());
        }
        return response()->json(['posts'=>$posts], 200);
    }

    public function store(Request $request){
        $imagePath=null;
        $data = $request->all();
        $user = Auth::user();
        if($user != null){
            if($request->hasFile('image')){
                $image = $request->file('image');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/posts');
                $image->move($destinationPath, $name);
                $imagePath = url('/').'/uploads/posts/'.$name;
                $data['image'] = $imagePath != null ? $imagePath : null;

            }
            $data['user_id'] = $user->id;
            $post = Post::create($data);
            return response()->json(['post'=>$post],200);
        }
        return response()->json(['error'=>'Unauthorized']);
    }


    public function update(Request $request, $id){
        $imagePath = null;
        $data = $request->all();
        $user = Auth::user();
        if($user != null){
            $post = Post::find($id);
            if($post != null){
                if($request->hasFile('image')){
                    $image = $request->file('image');
                    $name = time().'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/uploads/posts');
                    $image->move($destinationPath, $name);
                    $imagePath = url('/').'/uploads/posts/'.$name;
                    $data['image'] = $imagePath != null ? $imagePath : null;
                }
                $data['user_id'] = $user->id;
                $post->update($data);
                return response()->json(['post' => $post], 200);

            }
            return response()->json(['error' => 'Post not found'], 404);
        }
        return response()->json(['error' => 'Unauthorized'], 401);

    }

    public function destroy($id){
        $user = Auth::user();
        if($user != null){
            $post = Post::find($id);
            if($post->user_id == $user->id){
                $post->delete();
                return response()->json(['message'=>'Post deleted successfully'],200);
            }
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }
}
