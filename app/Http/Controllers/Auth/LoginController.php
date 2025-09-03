<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /**
     * Override username field to use no_rumah instead of email.
     */
    public function username()
    {
        return 'no_rumah';
    }
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    /**
     * Redirect users after login based on their role.
     */
    protected function redirectTo()
    {
        $user = auth()->user();
        if ($user && $user->role == 'admin') {
            // Redirect to admin.pembayaran.index route
            return route('admin.pembayaran.index');
        } elseif ($user && $user->role == 'user') {
            // Redirect to user dashboard route
            return route('users.home.index');
        }
        return '/home';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
}
