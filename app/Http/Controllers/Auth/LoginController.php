<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * @return Factory|View
     */
    public function loginPage()
    {
        return view('auth.loginPage');
    }

    /**
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function login(Request $request)
    {
        if (Auth::attempt($request->only('login', 'password'))) {
            Auth::login(Auth::user(), true);

            return Redirect::route('adminPanel', [Config::get('app.locale')]);
        }

        $request->session()->flash('alert', 'Неправильный логин или пароль');

        return Redirect::route('loginPage', [Config::get('app.locale')]);
    }

    /**
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();

        return Redirect::route('loginPage', [Config::get('app.locale')]);
    }
}
