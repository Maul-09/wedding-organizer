<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function App\Helper\path_view;

class AdminController extends Controller
{
    public function index(){
        $view = path_view('admin.dashboard-admin');
        return view($view);
    }
}
