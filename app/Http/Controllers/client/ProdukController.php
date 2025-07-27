<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function App\Helper\path_view;

class ProdukController extends Controller
{
    public function mua(){
        $view = path_view('client.page.mua');
        return view($view);
    }


    public function prewed(){
        $view = path_view('client.page.prewed');
        return view($view);
    }


    public function wedding(){
        $view = path_view('client.page.wedding');
        return view($view);
    }

    public function decor(){
        $view = path_view('client.page.dekorasi');
        return view($view);
    }

    public function dokumentasi(){
        $view = path_view('client.page.dokumentasi');
        return view($view);
    }

}
