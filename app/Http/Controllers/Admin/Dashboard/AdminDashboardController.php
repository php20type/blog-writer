<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;


class AdminDashboardController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
    	return view("admin.dashboard");
    }
}
