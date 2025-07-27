<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function App\Helper\path_view;

class AkunController extends Controller
{
    public function testimoni(){
        $view = path_view('admin.testimoni-admin');
        return view($view);
    }


    public function dataClient(){
        $view = path_view('admin.data-client');
        return view($view);
    }
}
