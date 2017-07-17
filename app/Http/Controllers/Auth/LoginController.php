<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
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
    
    protected function redirectTo(){
        $user = Auth::user();
        switch ($user->user_type) {
            case 'GUEST':
                return '/home';
                break;
            
            case 'EXECUTIVE':
                return '/executive_panel';
                break;
            
            case 'MANAGER':
                return '/manager_panel';
                break;

            case 'COORDINATOR':
                return '/coordinator_panel';
                break;

            case 'AMBASSADOR':
                return '/ambassador_panel';
                break;

            case 'ADMIN':
                return '/admin_panel';
                break;
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
