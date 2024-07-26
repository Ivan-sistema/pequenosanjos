<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\Contact;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $r)
    {
        $data['user'] = auth()->user();
        $data['profiles'] = Profile::all();
        $data['contact'] = Contact::all();
        return view('dashboard.dashboard', $data);
    }

    public function my_account()
    {
        $data['user'] = auth()->user();
        $data['profiles'] = Profile::all();
        $data['contact'] = Contact::all();
        return view('dashboard.my_account', $data);
    }

    public function my_account_action(UpdateProfileRequest $r)
    {
        $data = $r->only(['name', 'email', 'profile_id']);
        $userId = Auth::user()->id;
        $user = User::find($userId);
        $user->update($data);
        return redirect()->route('my_account')->with('success', 'Perfil atualizado com sucesso');
    }
}
