<?php

namespace App\Http\Middleware;

use Closure;

class CheckUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $user)
    {
        var_dump($user);
        switch ($user) {
            case 'ADMIN':
                return redirect('/admin_panel');
                break;

            case 'EXECUTIVE':
                return redirect('/executive_panel');
                break;

            case 'MANAGER':
                return redirect('/manager_panel');
                break;

            case 'CORODINATOR':
                return redirect('/coordinator_panel');
                break;

            case 'AMBASSADOR':
                return redirect('/ambassador_panel');
                break;

            case 'GUEST':
                return redirect('/home');
                break;
            
            default:
                var_dump('An error occured');
                break;
        }
        // return $next($request);
    }
}
