<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Newmiddleware
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
        if ($request->input('masosinhvien') !== '2001') {
            return require('admin');
        }
        else{
            echo 'bạn đã nhập sai mã ';
        }
        return $next($request);
    }
}
