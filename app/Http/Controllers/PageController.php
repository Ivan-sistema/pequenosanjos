<?php

namespace App\Http\Controllers;

use App\Mail\Contato;
use App\Models\Contact;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index (){
        return view('pages.home');
    }

    public function doacao() {
        return view('pages.doacao');
    }

    public function form_action(Request $r) {

        $contact = new Contact();
        $formData = $r->only(['name','email', 'telefone', 'whatsapp', 'assunto', 'descricao', 'fluxo']);
        $contact = Contact::create($formData);

        return redirect()->route('doacao')->with('success', 'E-mail enviado com sucesso');
    }

    public function store (Request $r)
    {
        $formData = $r->only(['name','email', 'telefone', 'whatsapp', 'assunto', 'descricao', 'fluxo']);
        $contact = Contact::create($formData);

        $sent = Mail::to('contato@pequenosanjos.com.br', 'Instituto Pequenos Anjos')->send(new Contato([
            'fromName' => $formData['name'],
            'fromEmail' => $r->input('email'),
            'subject' => $r->input('assunto'),
            'message' => $r->input('descricao'),
            'telefone' => $r->input('telefone'),
            'whatsapp' => $r->input('whatsapp')
        ]));


        return redirect()->route('home')->with('success', 'E-mail enviado com sucesso');
    }
}
