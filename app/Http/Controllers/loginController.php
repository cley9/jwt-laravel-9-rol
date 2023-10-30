<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class loginController extends Controller
{
    //
    function createUser(Request $request){
        $userCreate=new User();
        $userCreate->name=$request->name;
        $userCreate->email=$request->email;
        $userCreate->rol=$request->rol;
        $userCreate->password=bcrypt($request->password);
        // $userCreate->token=$token=JWTAuth::fromUser($userCreate);
            try { //manega los status 500
                $userCreate->save();
                $token=JWTAuth::fromUser($userCreate);
                if ($token) {
                        return response()->json(['mensaje'=>'usuario creado','nombre'=>$userCreate->name, 'token'=>$token]);
                    } else {
                            return response()->json(['mensaje'=>'usuario no creado','nombre'=>$userCreate->name, 'token'=>$token]);
                        }
        } catch (\Throwable $th) {
            return response()->json(['mensaje'=>'error no se creo el usuario']);
        }
    }
    public function loginUser(Request $request)
    {
        $credencials=[
               'email'=>$request->email,
               'password'=>$request->password,
            //    'password'=>bcrypt($request->password),
            // 'email'=>$email,
            // 'password'=>$password
          ];
          try {
                //   if (Auth::attempt($credencials)) {
                    if ($token=JWTAuth::attempt($credencials)) {
                    //   session(['email'=>$email]);
                    //   session(['rol'=>'4']);
                      // return view('admin.home');
                    //   $userRol=Auth::attempt($credencials);
                    // $userRol=User::get();
                    // $userRol=User::where('email',$request->email,'password',$request->password)->get()->where('password',$request->password)->get();
                    $userRol=User::where('email',$request->email)->get();
                    foreach($userRol as $key){
                        // return
                         $key->rol;
                    }
                    // where('password',$request->password)->get();
                    // $userRol= DB::table('users')
                    // ->where('email',$request->email)
                    // ->orWhere(function($query) {
                    //     $query->where('email',$request->email)
                    //           ->where('password',$request->password);
                    // })
                    // ->get();
                    $cookie = cookie('cookie_token', $token, 60 * 24);
                    return response()->json(['status'=>'ok', 'code'=>'200','user'=>$userRol,'token'=>$token,'rol'=>$key->rol])->withoutCookie($cookie);;
                    //   return response()->json(['status'=>'ok', 'code'=>'200','user'=>$userRol,'token'=>$token,'rol'=>$key->rol]);
                    //   return response(["token"=>$token], Response::HTTP_OK)->withoutCookie($cookie);
                  }else{
                      return response()->json(['status'=>'error', 'code'=>'303', 'mensaje'=>'Clave o usuario invalido']);
                    }
                
            } catch (\Throwable $th) {
                return response()->json(['status'=>'error', 'code'=>'500']);
            }

    }
    // function loginAdmin($email,$password){
    //   }
    function info(){
        // return ;
        return response()->json(['status'=>'access', 'code'=>'200']);

    }
    function logoutUser(){


        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);


        // Auth()->logout(true);
        // auth()->logout();
    // auth()->refresh();
    // return Auth::user();
    // Auth::user()->logout();
    // Auth::user()->token()->revoke();
    // $token=JWTAuth::;
    // $token=JWTAuth::fromUser($userCreate);

// Pass true to force the token to be blacklisted "forever"
// auth()->logout(true);
// $request->user()->token()->revoke();

// return response()->json(['status'=>'access', 'code'=>'200',$request->all()]);

        // return Auth()->logout();
    }
}
