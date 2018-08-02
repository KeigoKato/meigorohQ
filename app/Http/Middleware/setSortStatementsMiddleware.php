<?php

namespace App\Http\Middleware;

use Closure;

class setSortStatementsMiddleware
{
    /**
     * sortクエリが存在しない場合はcreated_atに強制する
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (empty($request->sort)) {
            $request->merge(['sort'=>'created_at']);
        }
        return $next($request);
    }
}
