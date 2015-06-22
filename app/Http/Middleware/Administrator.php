<?php
/**
 * Created by PhpStorm.
 * User: YOEL
 * Date: 18/03/15
 * Time: 11:38
 */

namespace App\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;
use Closure;

class Administrator {
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->guest())
        {
            if ($request->ajax())
            {
                return response('Unauthorized.', 401);
            }
            else
            {
                return redirect()->guest('/login');
            }
        }

        if($this->auth->user()->type != "administrator")
        {
            return response('Unauthorized',401);
        }

        return $next($request);
    }

}