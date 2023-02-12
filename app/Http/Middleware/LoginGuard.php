<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;

class LoginGuard
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
        if(session()->has('libid'))
        {
            if(session()->has('student_id')){
                return redirect('/rit/studentdashboard');
            }
            elseif(session()->has('teacher_id')){
                return redirect('/rit/fdashboard');
            }
            elseif(session()->has('librarian_id')){
                return redirect('/rit/libdashboard');
            }
            elseif(session()->has('principal_id')){
                return redirect('/rit/pdashboard');
            }
            elseif(session()->has('accountent_id')){
                return redirect('/rit/accountdashboard');
            }
            elseif(session()->has('tp_id')){
                return redirect('/rit/tpdashboard');
            }
            elseif(session()->has('hr_id')){
                return redirect('/rit/hrdashboard');
            }
            elseif(session()->has('emp_id')){
                return redirect('/rit/empdashboard');
            }
            else{
                return redirect()->back();
            }
            
        }
        else{
            return $next($request);
        }
        
    }
}
