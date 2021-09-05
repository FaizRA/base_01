<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

        $user=User::where('email',$request->email)->where('status','active')->first();
        if (!$user){
            return response()->json([
                'success' => false,
                'error'=>['email'=>['Email Not Found']]
            ]);
        }

        $pass = Hash::check($request->password, $user->password) ? true : false;
        if (!$pass){
            return response()->json([
                'success' => false,
                'error'=>['password'=>['Credential Invalid']]
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
        $remember_me = $request->has('remember') ? true : false;

        /** Login Process*/
        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password], $remember_me)) {
            return redirect()->route('admin_dashboard');
        }

        return $request->toArray();
    }

    public function logoutProcess(Request $request){
        Auth::guard('user')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('loginPage');
    }
}
