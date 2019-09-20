<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
        
        if (Auth::check()) {
            $user = Auth::User();
            if ($user->role == 1) {
                return $next($request);
            } else {
                return redirect('admin/login') ->with('msg','Bạn chưa đủ đẹp trai để truy cập, vui lòng liên hệ quản trị viên');
            }
            
        } else {
            return redirect('admin/login');
        }
        
    }
}
