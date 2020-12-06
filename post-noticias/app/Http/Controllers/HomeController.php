<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Category;
use App\Post;


class HomeController extends Controller{
    public function index(){
        $posts = Post::where('active', true)->get();
        
        return view('home', [
            'posts' => $posts
        ]);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
