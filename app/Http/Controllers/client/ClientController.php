<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function App\Helper\path_view;

class ClientController extends Controller
{
    public function index(){

        $view = path_view('user.index');
        return view($view);
    }
}
