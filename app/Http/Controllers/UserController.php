<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function view()
    {
        return view('registration');
    }
    public function show()
    {
        return view('admin');
    }
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email',
            'password'   => 'required|min:6',
        ]);
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'role'  => $request->role,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
        ]);
        // Send email 
        Mail::to($user->email)->send(new WelcomeEmail($user));

        return redirect()->back()->with('success', 'Registration successful!');
    }
    public function loginpage()
    {
        return view('login');
    }
    public function dashboard(){
        $users=User::all();
        return view('dashboard',compact('users'));
    }
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
        }

        if ($user->role === 'user') {
            return response()->json(['message' => 'You are not allowed to login from here'], 403);
        }

        Auth::login($user);

        return redirect()->route('dashboard');
    }
}
