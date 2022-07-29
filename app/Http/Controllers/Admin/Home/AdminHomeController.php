<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function dashboard()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Products - Online Store";
        return view('admin.dashboard')->with("viewData", $viewData);
    }


}
