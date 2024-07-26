<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function register_action(RegisterRequest $r)
    {
        $userData = $r->only('name', 'email', 'password');
        $userData['password'] = Hash::make($userData['password']);
        $user = User::create($userData);

        Auth::loginUsingId($user->id);
        return redirect()->route('select-profile');

    }

    public function select_profile(){
        $data['profiles'] = Profile::all();
        return view('auth.select-profile', $data);
    }


    public function select_profile_action(Request $request){

        $data = $request->only(['profile']);
        $profileRegister = Profile::find($data['profile']);

        if(!$profileRegister){
              return redirect('/login');
        }
        $user = Auth::user();
        $user->profile_id = $profileRegister->id;
        $user->save();
        return redirect()->route('home');
        dd($profileRegister);
    }

    public function login_action(LoginRequest $request){

        $loginData = $request->only(['email', 'password']);

        if(!Auth::attempt($loginData)){
            $data['message'] = 'Usuário ou senha Inválidos';
            $data['email'] = $loginData['email'];
            return view('auth.login', $data);
        }

        return redirect()->route('dashboard');

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
