<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Http\Request;

class authkey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $request->headers->set('accept', 'application/json', true);
        $api_key = $request->header('api-key');
        $account_number = $request->header('account-number');

        $token = "TZHCDWDk5wZ6dFOHNx0b5ksNFUDDtIIKiSHqt9HcvtbC3NA2mvcyt9vWboqOjpKmLRa9fsjQH27VIbkg"."19943";
        if($token != $api_key.$account_number){
             return response()->json("unauthorized", 401);
        }


        return $next($request);
    }
}
