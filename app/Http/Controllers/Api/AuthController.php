<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    use ApiResponser;

    public function register(Request $request)
    {
        $requestVal=[
            'name'   => 'required|max:100|min:3',
            'email'   => 'required|max:100|min:3|email',
            'password'   => 'required|max:20|min:6',
        ];
        $validatingResult=[
            'required'=>'Harus Diisi',
        ];
        $v = Validator::make($request->all(), $requestVal,$validatingResult);
        if ($v->fails()) {return response()->json(['success' => false, 'error'=>$v->errors()]);}

        $user = User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'email' => $request->email
        ]);


        $token=$user->createToken('API Token')->plainTextToken;
        $user->api_token=$token;
        $user->save();
        return $this->success([
            'token' => $token
        ]);
    }

    public function login(Request $request)
    {
        $attr = $request->validate([
            'email' => 'required|string|email|',
            'password' => 'required|string|min:6'
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            $reponse=$this->error('Invalid Credential');
            return $reponse;
        }

        $token=$user->createToken('API Token')->plainTextToken;
        $user->api_token=$token;
        $user->save();
        return $this->success([
            'token' => $token
        ]);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Tokens Revoked'
        ];
    }
}
