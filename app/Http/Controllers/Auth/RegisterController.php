<?php

namespace App\Http\Controllers\Auth;

use App\Events\UserRegistrationSuccessful;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\WelcomeNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }
    public function store(Request $request)
    {
         //dd($request->get("name"));
        $this->validate($request, [
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'email_verified_at' => now(),
            'password' => Hash::make($request->password),
            'remember_token' => Str::random(10),
        ]);
        //dd($user->name);

        auth()->attempt($request->only("email", "password"));
        $user->notify(new WelcomeNotification);
        //event(new UserRegistrationSuccessful($user));

        return redirect()->route('profile');

        // dd($request);
    }
}
