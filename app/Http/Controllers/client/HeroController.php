<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function App\Helper\path_view;

class HeroController extends Controller
{
    public function index(){

        $view = path_view('client.home-page');
        return view($view);
    }


    public function contact(){
        $view = path_view('client.contact-us');
        return view($view);
    }
}
