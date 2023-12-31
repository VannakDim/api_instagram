<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{

    public function index(){
        return view ('auth.login');
    }

    // Register new user
    public function register(Request $request){
        $imagePath=null;
        $validatorName = Validator::make($request->all(),[
            'name'=>'required|string|max:255|unique:users',
        ]);

        if($validatorName->fails()){
            return response()->json(['error'=> $validatorName->errors()],400);
        }

        $validator = Validator::make($request->all(),[
            'email'=>'required|string|email|max:255|unique:users',
            'password'=>'required|string|min:8|confirmed',
            'profile_photo'=>'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'short_bio'=>'nullable|max:255'
        ]);
        if($validator->fails()){
            return response()->json(['error'=> "Email already exist"],401);
        }

        if($request->hasFile('profile_photo')){
            $image = $request->file('profile_photo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = Public_path('/uploads/users');
            $image->move($destinationPath,$name);
            $imagePath = url('/').'/uploads/users/'.$name;
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'profile_photo' => $imagePath,
            'short_bio' => $request->short_bio ?? null,
        ]);

        $token = $user->createToken('authToken')->accessToken;
        return response()->json(['user'=>$user,'access_token'=>$token]);
    }


    // Login user
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('authToken')->accessToken;
            // return token with user data
            return response()->json(['token' => $token, 'user' => $user], 200);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    // update user profile
    public function updateProfile(){
        $user = Auth::user();
        $imagePath = null;
        // Handle the image upload
        if (request()->hasFile('profile_photo')) {
            $image = request()->file('profile_photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/user'), $imageName);
            // add with base domain url to store in database
            $imagePath = url('/uploads/user/' . $imageName);
        }
        // update user profile
        $user->update([
            'name' => request()->name,
            // 'email' => request()->email,
            'profile_photo' => $imagePath ?? null,
        ]);
        // return updated user data
        return response()->json(['user' => $user], 200);
    }

    // Logout current user
    public function logout(){
        $user = Auth::user()->token();
        $user -> revoke();
        return response()->json([
            'message'=>'User logged out successfully'
        ],200);
    }

    // Show current user information
    public function user()
    {
        return Auth::user();
    }

    // Delete current user
    public function deleteAccount(){
        $user = Auth::user();
        if($user->profile_photo){
            $imagePath = str_replace(url('/'), '', $user->profile_photo);
            unlink(public_path($imagePath));
        }
        $user->delete();
        return response()->json([
            'message'=>'User account deleted successfully'
        ],200);
    }
}
