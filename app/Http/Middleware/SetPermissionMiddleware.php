<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Exceptions\UnauthorizedException;
class SetPermissionMiddleware
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

        $routes     =   Route::getRoutes();

        foreach ($routes as $key =>$route){
            if ($route->getName()!=NULL){

            $route->action['middleware'][] = 'permission'.$route->getName();


        }}
        return $next($request);
        /*$action = app('request')->route()->getAction();
        dd(request()->route()->getAction());
        $controller = class_basename($action['controller']);*/
        if (app('auth')->guest()) {
            throw UnauthorizedException::notLoggedIn();
        }
        $permissions = is_array($permission)
            ? $permission
            : explode('|', $permission);

        foreach ($permissions as $permission) {

            if (app('auth')->user()->can($permission)) {

            }
        }

        throw UnauthorizedException::forPermissions($permissions);
    }
}
