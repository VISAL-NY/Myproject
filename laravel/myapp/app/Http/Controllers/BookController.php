<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        // return 'Welcome to Book';
        $data=[
            "title"=>"Book shop",
            "author"=>"admin"
        ];
        $title="Book shop";
        $author="admin";
        //return view('books',compact('title','author')); //pass value to view for old version

        //return view('books')->with('title',$title)->with('author',$author);// pass data to view for new version
        return view('books')->with('data',$data);
    }
}
