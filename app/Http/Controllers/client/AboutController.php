<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function App\Helper\path_view;

class AboutController extends Controller
{
    public function about(){
        $view = path_view('client.about-us');
        return view($view);
    }
}
