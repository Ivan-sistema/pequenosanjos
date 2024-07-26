<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactForm;
use Illuminate\Http\Request;

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
        $formData = $r->only(['name','email', 'telefone', 'whatsapp', 'assunto', 'descricao']);
        $contact = Contact::create($formData);

        return redirect()->route('home')->with('success', 'E-mail enviado com sucesso');;
    }
}
