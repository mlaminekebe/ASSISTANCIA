<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isAssistancia
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
        if ($request->user()->role !=2) {
            if($request->user()->role==1){
               return redirect('listAdmin');
            }
            if($request->user()->role==0){
                return redirect('form/'.$request->user()->id);
            }
        }

        return $next($request);
    }
}
