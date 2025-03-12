<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestRouteController extends Controller
{
   public function home()
   {
       return view('main.home');
   }

   public function contact()
   {
       return view('main.others.contact');
   }

   public function profile()
   {
       return view('main.others.profile');
   }

   public function message()
   {
       return view('main.others.message');
   }

   public function gallery()
   {
       return view('main.others.gallery');
   }
}
