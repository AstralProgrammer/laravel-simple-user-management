<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class UserRoleAccess
{
  /**
   * Handle an incoming request.
   *
   * @param \Illuminate\Http\Request $request
   * @param \Closure $next
   * @return mixed
   */
  public function handle(Request $request, Closure $next)
  {
    try {
      $user_role = auth()->user()->role;
      $current_route = Route::currentRouteName();

      if (in_array($current_route, $this->userAccessRoles()[$user_role])){
        return $next($request);
      } else {
        abort(403);
      }
    } catch (\Throwable $th) {
      abort(403);
    }
  }

  private function userAccessRoles()
  {
    return [
      'staff' => [
        'dashboard',
        'users.index',
      ],
      'admin' => [
        'dashboard',
        'users.index',
        'users.destroy',
        'users.edit',
        'users.update',
        'users.create',
        'users.store',
      ],
    ];
  }
}
