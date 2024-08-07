<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\Contact;
use App\Models\ContactForm;
use App\Models\Email;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index(Request $r)
    {
        $data['user'] = auth()->user();
        $data['profiles'] = Profile::all();
        $data['contacts'] = Contact::orderBy('created_at', 'desc')->paginate(10);
        $data['emails'] = Email::all();

        return view('dashboard.dashboard', $data);
    }

    public function my_account()
    {
        $data['user'] = auth()->user();
        $data['profiles'] = Profile::all();
        $data['contacts'] = Contact::all();
        $data['emails'] = Email::all();

        return view('dashboard.my_account', $data);
    }

    public function my_account_action(UpdateProfileRequest $r)
    {
        $data = $r->only(['name', 'email', 'profile_id']);
        $userId = Auth::user()->id;
        $user = User::find($userId);
        $user->update($data);
        $data['emails'] = Email::all();
        return redirect()->route('my_account')->with('success', 'Perfil atualizado com sucesso');
    }

    public function users(){
        $data['user'] = auth()->user();
        $data['profiles'] = Profile::all();
        $data['contact'] = Contact::all();
        $data['users'] = User::orderBy('created_at', 'desc')->paginate(10);
        $data['emails'] = Email::all();

        return view('dashboard.usuarios', $data);
    }

    public function new_user()
    {
        $data['user'] = auth()->user();
        $data['profiles'] = Profile::all();
        $data['contact'] = Contact::all();
        $data['emails'] = Email::all();
        return view('dashboard.novo_usuario', $data);
    }
    public function new_user_action(RegisterRequest $r)
    {
        $userData = $r->only('name', 'email', 'password', 'profile');
        $userData['password'] = Hash::make($userData['password']);
        $user = User::create($userData);


        $data['user'] = auth()->user();
        $data['profiles'] = Profile::all();
        $data['contact'] = Contact::all();
        $data['users'] = User::orderBy('created_at', 'desc')->paginate(10);
        $data['emails'] = Email::all();
        return view('dashboard.usuarios', $data);
    }

    public function read_message (string $id)
    {
        $updateRead = Contact::find($id);
        $updateRead->fluxo = '0';
        $updateRead->save();

        $data['user'] = auth()->user();
        $data['profiles'] = Profile::all();
        $data['contact']  = Contact::findOrFail($id);

        $data['contacts'] = Contact::all();
        $data['emails'] = Email::all();
        ;
        return view('dashboard.message', $data);
    }
}
