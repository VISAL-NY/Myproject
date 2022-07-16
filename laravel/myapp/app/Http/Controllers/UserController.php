<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = array(
            '1' => "dara@gmail.com",
            '2' => "nita@gmail.com",
            '3' => "linda@gmail.com",
            '4' => "seyha@gmail.com"
        );

        return view('user')->with('data',$data);
    }

    public function show($id){
        // return view('user');
        return 'Request is : '.$id;
    }

    public function child($id,$childid){
        return 'id is : '.$id.'child id is : '.$childid;
    }

    public function getdata(){
    
    
    }
}
