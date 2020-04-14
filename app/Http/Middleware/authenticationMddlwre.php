<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;
class authenticationMddlwre
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

            if (!session()->has('sessUsername')) {
                return redirect('/custlogin');
                

            }

  return $next($request);
        //  if ($request->session()->has('sessUsername')) {
        //     return redirect('/tickets');
        // }
        
      

    }
}
