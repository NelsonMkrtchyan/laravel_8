<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;

use App\Models\Permission;
use App\Models\User;

/**
 * Class ProfileController
 *
 * @package App\Http\Controllers
 */
class ProfileController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $user = User::find(auth()->user()->id);
        $posts = $user->posts()->get();
        $permissions = $user->permissions()->get();

        return view('profile', compact('posts', 'permissions'));
    }
}
