<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;

class AdminController extends Controller
{
    use AuthenticatesUsers;

    /**
     * @return Factory|View
     */
    public function panel()
    {
        return view('admin.adminPanel');
    }
}
