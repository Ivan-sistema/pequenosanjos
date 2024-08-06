<?php

namespace App\Http\Controllers;

use App\Mail\Mensagem;
use App\Models\Contact;
use App\Models\Email;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    //
    public function all_email(){
        $data['user'] = auth()->user();
        $data['profiles'] = Profile::all();
        $data['contacts'] = Contact::paginate(10);
        $data['emails'] = Email::orderBy('created_at', 'desc')->paginate(4);

        return view('dashboard.emails/emails', $data);
    }
    public function new_email(){
        $data['user'] = auth()->user();
        $data['profiles'] = Profile::all();
        $data['emails'] = Email::all();

        return view('dashboard.emails/novo_email', $data);
    }

    public function store (Request $r)
    {
        $emailData = $r->only('name', 'email', 'copy', 'assunto','file','mensagem');
        $email = Email::create($emailData);


        $user = auth()->user();
        $userEmail = $r->input('useremail');
        $toEmail = $r->input('email');

        $sent = Mail::to($toEmail)->send(new Mensagem([
            'fromName' => $r->input('name'),
            'toEmail' => $r->input('email'),
            'userEmail' => $r->input('useremail'),
            'toCopy' => $r->input('copy'),
            'assunto' => $r->input('assunto'),
            'file' => $r->input('file'),
            'subject' => $r->input('mensagem'),
            'attachments' => $r->file('file'),
        ]));
        $data['user'] = auth()->user();
        $data['profiles'] = Profile::all();
        $data['contacts'] = Contact::paginate(10);
        $data['emails'] = Email::orderBy('created_at', 'desc')->paginate(4);

        //return redirect()->route('dashboard.emails/novo_email')->with('success', 'E-mail enviado com sucesso');
        return view('dashboard.emails/emails', $data);
    }
}
