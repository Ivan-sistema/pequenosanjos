<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Email;
use App\Models\Profile;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    //
    public function all_email(){
        $data['user'] = auth()->user();
        $data['profiles'] = Profile::all();
        $data['contacts'] = Contact::paginate(10);
        $data['emails'] = Email::paginate(4);

        return view('dashboard.emails/email', $data);
    }
    public function new_email(){
        $data['user'] = auth()->user();
        $data['profiles'] = Profile::all();
        $data['contacts'] = Contact::paginate(10);
        $data['emails'] = Email::all();

        return view('dashboard.emails/novo_email', $data);
    }

    public function action_new_email (Request $r)
    {

        $emailData = $r->only('name', 'email', 'copy', 'assunto','file','mensagem');
        $email = Email::create($emailData);

        $data['user'] = auth()->user();
        $data['profiles'] = Profile::all();
        $data['emails'] = Email::paginate(4);
        $data['contacts'] = Contact::paginate(10);

        return view('dashboard.emails/email', $data);
    }
}
