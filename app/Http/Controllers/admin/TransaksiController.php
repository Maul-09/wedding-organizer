<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function App\Helper\path_view;

class TransaksiController extends Controller
{
    public function showBooking(){
        $view = path_view('admin.booking-admin');
        return view($view);
    }
}
