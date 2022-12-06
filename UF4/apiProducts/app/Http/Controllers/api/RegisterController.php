<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
     public function register(Request $request)
    {

        // En $input guardem totes les dades que s'han enviat via POST
        $input = $request->all();

        // validem les dades rebudes
        $validator = Validator::make($input, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);

        // Si alguna dada no és correcta
        if($validator->fails()){

            $response = [
            'success' => false,
            'message' => "Dades usuari incorrectes.",
            'data' => $validator->errors(),
            ];
            
            return response()->json($response, 404);     
        }

        // Encriptem el password  
        $input['password'] = bcrypt($input['password']);

        // creem el nou usuari
        $user = User::create($input);

        // Creem un token per al nou usuari
        $data['token'] =  $user->createToken('MyApp')->plainTextToken;
        $data['name'] =  $user->name;

        // Responem a la crida amb un tot ok!
        $response = [
            'success' => true,
            'data'    => $data,
            'message' => "Usuari creat correctament.",

        ];

        return response()->json($response, 200);


    }

   

    public function login(Request $request)
    {

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 

            $user = Auth::user(); 
            $user->tokens()->delete();

            $data['token'] =  $user->createToken('MyApp')->plainTextToken; 

            $data['name'] =  $user->name;
   

            $response = [
            'success' => true,
            'data'    => $data,
            'message' => "Usuari autoritzat correctament.",
            ];

            return response()->json($response, 200);

        } 

        $response = [
            'success' => false,            
            'message' => "Usuari no autoritzat.",
            ];

        return response()->json($response, 401);

    }
}
