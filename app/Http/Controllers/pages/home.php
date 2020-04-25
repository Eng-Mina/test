<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class home extends Controller
{

    public function home(){
        return view('welcome');
    }

}
