<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

use App\Models\Alumno;



class UserController extends Controller
{
    protected $alumnos;
    public function __construct(Alumno $alumnos)
    {
        $this->alumnos = $alumnos;
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        // return response()->json([
        //     'status' => 1,
        //     'msg' => 'Registro de usuario completado con exito!',
        // ]);
        return response()->view('users.login');       

    }

    public function login(Request $request) {

        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        $user = User::where("email", "=", $request->email)->first();

        if( isset($user->id) ){
            if(Hash::check($request->password, $user->password)){
                //creamos el token
                $token = $user->createToken("auth_token")->plainTextToken;
                //si está todo ok

                // return response()->json([
                //     "status" => 1,
                //     "msg" => "¡Usuario logueado exitosamente!",
                //     "access_token" => $token
                // ]); 
                
                return response()->view('alumnos.crear');       
            }else{
                // return response()->json([
                //     "status" => 0,
                //     "msg" => "La password es incorrecta",
                // ], 404);  
                
                   
                   return response("<h2>La password es incorrecta</h2>
                   <button><a href='/users/login' style='text-decoration:none; color:black;'>Volver</a></button>", 404);
                
            }
            
        }else{
            // return response()->json([
            //     "status" => 0,
            //     "msg" => "Usuario no registrado",
            // ], 404);  

            return response(
                "<h2>Usuario no registrado</h2> 
                 <button> <a href='/users/login' style='text-decoration:none; color:black;'>Volver</a> </button> 
                 <br>
                 <br>
                 <button><a href='/users/register' style='text-decoration:none; color:black;'>Registrarse</a> </button>", 404);

        }
    }

    public function userProfile(){ 
        return response()->json([
            "status" => 0,
            "msg" => "Acerca del perfil de usuario",
            "data" => auth()->user()
        ]);  
    }

    public function logout(){ 
        auth()->user()->tokens()->delete();
        
        return response()->json([
            "status" => 1,
            "msg" => "Sesion cerrada",
        ]);  
     }

}
