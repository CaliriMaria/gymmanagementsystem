<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
   public function index()
   {
       if (Auth::user()->hasRole == 'User') {
           return view('/dashboard');
       }
       elseif (Auth::user()->hasRole == 'Admin') {
           return view('/admin.dashboard');
       }
       elseif (Auth::user()->hasRole == 'staff') {
           return view('/staff.dashboard');

       }
       elseif (Auth::user()->hasRole == 'trainer') {
           return view('/trainer.dashboard');
       }
       else {
           return view('welcome');
       }
   }
}
