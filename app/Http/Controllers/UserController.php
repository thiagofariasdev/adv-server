<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\User;
use DB;
use App\Notifications\Validate;

class UserController extends Controller
{
    public function register(Request $req){
        if(User::where('email', $req->email)->count() > 0){
            return ['error'=>'Este email já está em uso.', 'field'=>'email'];
        }
        if(strlen($req->senha) >= 21 || strlen($req->senha) <= 5){
            return ['error'=>'A senha escolhida deve ter entre 6 e 20 caracteres', 'field'=>'senha'];
        }
        $user = User::create([
            'name'=> $req->name,
            'email'=> $req->email,
            'gender'=> $req->gender == 'female' ? false : true,
            'avatar'=> $req->gender == 'female' ? '/svg/user_fema.svg' : '/svg/user_male.svg',
            'password'=>Hash::make($req->senha),
            'api_token'=> Hash::make(str_random(60))
        ]);
        
        $token = Hash::make(str_random(60));

        DB::table('user_validations')->insert([
            'user_id' => $user->id,
            'timed_token'=> $token,
            'password'=> $req->senha
        ]);

        $user->token = $token;
        $user->notify(new Validate);
        
        return view('auth.confirm');
    }
    public function validateEmail(Request $req)
    {
        $token = array_key_exists('api_token', $_GET) ? $_GET['api_token'] : '';
        $user_validator = DB::table('user_validations')->first();
        $password = $user_validator->password;
        $user = User::where('id', $user_validator->user_id)->first();
        User::where('id', $user_validator->user_id)->update([
            'email_verified_at' => date('Y-m-d H:i:s' ,time())
        ]);
        DB::table('user_validations')->where('id', $user_validator->id)->delete();
        return view('auth.login', ['email'=>$user->email, 'password'=>$password]);
    }
    public function logout()
    {
        User::where('id', Auth::user()->id)->update([
            'api_token' => Hash::make(str_random(60))
        ]);
        Auth::logout();
        echo '<script>window.localStorage.clear()</script>';
        return redirect('/');
    }
    public function api_login(Request $req)
    {
        if(!User::where('email', $req->email)->exists()){
            return ['success'=>false, 'field'=>'email', 'message'=>'Usuário não encontrado.'];
        }
        $user = User::where('email', $req->email)->first();
        if(!Hash::check($req->password, $user->password)){
            return ['success'=>false, 'field'=>'pass', 'message'=>'Senha incorreta'];
        }
        return ['success'=>true, 'user'=>$user];
    }
}