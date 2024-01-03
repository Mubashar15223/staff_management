<?php

namespace App\Http\Controllers\Header;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function massage(){
       return view('header.message'); 
    }
    public function notification(){
        return view('header.notification'); 
     }
}
