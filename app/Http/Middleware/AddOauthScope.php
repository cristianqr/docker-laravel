<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AddOauthScope
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        $content = json_decode($response->content(), true);
        if($request->is('oauth/token')) {
            $response->setContent(array_merge(
                $content,
                ['scope' => 'nfmc']
            ));
        }

        return $response;
    }
}
