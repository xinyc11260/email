<?php
namespace app\middleware;

use Closure;
use think\Request;

class TenantAuth
{
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }
}
