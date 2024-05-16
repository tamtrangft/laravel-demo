<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  public function index()
  {
    return view('login');
  }

  public function newUser()
  {
    return view('register');
  }

  /**
   * Handle register new user.
   */
  public function register(Request $request): RedirectResponse
  {
    $credentials = $request->validate([
      'username' => ['required'],
      'name' => ['required'],
      'role' => ['required'],
      'email' => ['required'],
      'password' => ['required']
    ]);

    $credentials['createdAt'] = date('Y-m-d H:i:s');
    $credentials['lastLoggedIn'] = date('Y-m-d H:i:s');
    $credentials['password'] = Hash::make($credentials['password']);

    // for ($i = 6; $i < 58; $i++) {
    //   $newCre = $credentials;
    //   $newCre['username'] = $credentials['username'] . $i;
    //   $newCre['name'] = $credentials['name'] . ' ' . $i;
    //   $newCre['email'] = $credentials['email'] . '+' . $i . '@gft.com';

    //   $newCre['createdAt'] = date('Y-m-d H:i:s');
    //   $newCre['lastLoggedIn'] = date('Y-m-d H:i:s');
    //   $newCre['password'] = Hash::make($credentials['password']);

    //   // dd($credentials);

    //   // if (User::create($credentials)) {
    //     // $request->session()->regenerate();

    //     // return redirect()->intended('/admin');
    //   // }

    //   User::create($newCre);
    // }


    if (User::create($credentials)) {
      // $request->session()->regenerate();

      return redirect()->intended('/admin');
    }

    return back()->withErrors([
      'username' => 'The provided credentials do not match our records.',
    ])->onlyInput('username');
  }

  /**
   * Handle an authentication attempt.
   */
  public function authenticate(Request $request): RedirectResponse
  {
    $credentials = $request->validate([
      'username' => ['required'],
      'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();

      return redirect()->intended();
    }

    return back()->withErrors([
      'username' => 'The provided credentials do not match our records.',
    ])->onlyInput('username');
  }

  /**
   * Log the user out of the application.
   */
  public function logout(Request $request): RedirectResponse
  {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
  }
}
