<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController2 extends Controller
{
    //
    public function index1(){
        return 'a';
    }

    public function index2(){
        return 'a';
    }

    public function index3(){
        return 'a';
    }

    private function index4(){
        return 'a';
    }

    private function index5(){
        return 'a';
    }

    public function index6(){
        return 'a';
    }

    public function index7(){
        return 'a';
    }
}
