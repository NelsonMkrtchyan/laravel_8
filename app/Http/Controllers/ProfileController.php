<?php

namespace App\Http\Controllers;

use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $posts = User::find(auth()->user()->id)->posts()->get();
        return view('profile', compact('posts'));
    }
}
