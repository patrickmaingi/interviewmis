<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckIpMiddleware
{
    
    //public  $whiteIps =['206.189.205.251'];
    
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $high='10.195.4.255';
        $low='10.195.4.0';
        $high_ip='10.195.5.255';
        $low_ip='10.195.5.0';
        $ip = $_SERVER['REMOTE_ADDR'];
        
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
        if (!($ip <= $high_ip && $low_ip <= $ip) && !($ip <= $high && $low <= $ip)) {

        //if (!in_array($ip, $this->whiteIps)) {
    
            /*
                 You can redirect to any error page. 
            */
            return response()->json(['your ip address is not valid.']);
        }
    
        return $next($request);
    }
}


