<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminAuthController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin/dashboard';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Show the admin login form
     */
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    /**
     * Handle an admin login request to the application.
     */
    public function login(Request $request)
    {
        $this->validateLogin($request);

        if ($this->attemptLogin($request)) {
            if (Auth::user()->is_admin) {
                return $this->sendLoginResponse($request);
            } else {
                Auth::logout();
                return redirect()
                    ->back()
                    ->withInput($request->only('email', 'remember'))
                    ->withErrors(['email' => 'You do not have admin privileges.']);
            }
        }

        return $this->sendFailedLoginResponse($request);
    }

    /**
     * Log the admin out of the application.
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect()->route('admin.login.form');
    }
} 