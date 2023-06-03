<?php

namespace App\Http\Controllers\API;

use App\Actions\Fortify\PasswordValidationRules;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //Untuk Validasi Password Register
    use PasswordValidationRules;

    public function login(Request $request){
        // Gunakan Try Catch biar ada error nya
        try{
        //   Validasi
        $request->validate([
            'email' => 'email|required|',
            'password' => 'required|min:7'
        ]);

        // Taro di variable
        $credentialls = request(['email', 'password']);

        if(!Auth::attempt($credentialls)){
            return ResponseFormatter::error([
                'message' => 'Unathorized'
            ], 'Authentication Failed', 500);
        }

        // Ngecek Hash sesuai tidak
        $user = User::where('email', $request->email)->first();
        if(!Hash::check($request->password, $user->password, [])){
            throw new \Exception('Invalid Credentials');
        }


        // Jika berhasil Login dan bikin Token
        $tokenResult = $user->createToken('authToken')->plainTextToken;

        return ResponseFormatter::success([
            'access_token' => $tokenResult,
            'token_type' => 'Bearer',
            'user' => $user
        ], "Authenticated");


    }
    catch(Exception $error){
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $error
            ], 'Authentication Failed', 500);
    }
}

public function register(Request $request){
    try{
        $request->validate([
            'name' => ['required', 'string', 'max:20'],
            'email' => ['required','string' ,'email', 'unique:users'],
            'password' => $this->passwordRules()
        ]);

        // Langsung menambahkan field baru di table User
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);

        // Buat response ke API nya
        $user = User::where('email', $request->email)->first();


        // Create akun dan berikan token
        $tokenResult = $user->createToken('authToken')->plainTextToken;

        return ResponseFormatter::success([
            'acces_token' => $tokenResult,
            'token_type' => 'Bearer',
            'user' => $user
        ]);

    }


    catch(Exception $error){
        return ResponseFormatter::error([
            'message'=> 'Somethinh went wrong',
            'error' => $error->getMessage()
        ], 'Authentication Failed', 500);
    }
}

}
