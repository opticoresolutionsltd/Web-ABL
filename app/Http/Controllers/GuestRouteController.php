<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestRouteController extends Controller
{
   public function home()
   {
       return view('main.home');
   }
}
