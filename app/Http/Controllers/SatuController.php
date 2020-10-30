<?php

namespace App\Http\Controllers;

class SatuController extends Controller
{
    public function test1(){
        return view("view-2");
    }
    public function test2(){
        return view("view-3");
    }
    public function test3(){
        return view("view-4");
    }
}