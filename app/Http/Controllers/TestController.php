<?php

namespace App\Http\Controllers;

use App\Models\User2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TestController extends TestController2
{
    //
    public function index(){
//        $user=new User2();
//        $user->name='Admin';
//        $user->password=Hash::make('12345678');
//        $user->save();

        $data['user']=User2::find(1);
        $data['user']->email='admin@gmail.com';
        $data['user']->save();
        return $data;
    }
}
