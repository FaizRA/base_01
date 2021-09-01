<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function index(){

        return view('admin.login.login');
    }

    public function loginProcess(Request $request){

        $requestVal=[
            'email'   => 'required|max:100|min:3|email',
            'password'   => 'required|max:100|min:3',
            'remember'   => 'nullable',
        ];

        $validatingResult=[
            'required'=>'Harus Diisi',
            'logo.mimes'=>'Format Image Harus jpeg/jpg/png/webp',
            'logo.max'=>'Ukuran Image Max kb',
        ];


        $v = Validator::make($request->all(), $requestVal,$validatingResult);

        if ($v->fails())
        {
            /*Validasi AJAX*/
            return response()->json([
                'success' => false,
                'error'=>$v->errors()
            ]);
        }

        /**
         * If lolos validasi
         */
        if ($request->action!='submit'){
            /*Permision Submit*/
            return response()->json([
                'success' => true
            ]);
        }

        /** Login Process*/

        return $request->toArray();
    }
}
