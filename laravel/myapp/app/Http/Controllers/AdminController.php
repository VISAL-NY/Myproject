<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        //return 'Hello from cambodia';
        return view('welcome');
    }
}
