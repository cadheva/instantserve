<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    function index(){
        return view("views/login");
    }
    function login(){

    }
}
