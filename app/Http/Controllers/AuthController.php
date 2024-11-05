<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('profile.login');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.signup');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'message' => 'The provided credentials do not match our records.',
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required|string|regex:/^[0-9]{11,13}$/',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'confirm_password' => 'required',
            'tnc' => 'accepted',
            
        ]);
        

        if ($request->password !== $request->confirm_password) {
            return redirect()->back()->withErrors(['confirm_password' => 'The confirmation password does not match.'])->withInput();
        }

        $data = $request->only('name', 'phone', 'email');
        $data['password'] = Hash::make($request->password);
        $data['photo'] = 'default.jpg';

        User::create($data);

        return redirect('/masuk');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function edit()
    {
        $user = Auth::user();
        return view('auth.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'phone' => 'nullable|string|regex:/^[0-9]{11,13}$/',
            'email' => 'nullable|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:8',
            'password' => 'nullable|min:8',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->password !== $request->confirm_password) {
            return redirect()->back()->withErrors(['confirm_password' => 'The confirmation password does not match.'])->withInput();
        }

        if ($request->filled('name')) {
            $user->name = $request->name;
        }

        if ($request->filled('phone')) {
            $user->phone = $request->phone;
        }

        if ($request->filled('email')) {
            $user->email = $request->email;
        }

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        if ($request->hasFile('photo')) {
            $photoName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('images'), $photoName);
            $user->photo = $photoName;
        }

        /** @var \App\Models\User $user **/
        $user->save();

        return redirect('/')->with('success', 'Profile updated successfully!');
    }


}
