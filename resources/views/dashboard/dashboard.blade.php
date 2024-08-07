<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
        {{-- <link rel="stylesheet" href="{{asset('build/assets/app-ec8be896.css')}}" /> --}}
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2186Z0WSQ5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2186Z0WSQ5');
</script>
    </head>
    <body>

<div class="container-fluid">
    <div class="row">
        <div class="col-2" style="padding: 0">
            <div class="user user__dashboard  d-flex flex-column justify-content-center align-items-center">
                <div class="img-fluid user__dashboard__figure">
                    <i class="bi bi-person-circle"></i>
                </div>
                <div class="user__dashboard__content text-center mt-2">
                    <p style="padding:0; margin:0"><strong>{{$user->name}}</strong></p>
                    <p style="padding:0; margin:0">
                        @foreach ($profiles as $profile)
                            {{Auth::user()->profile_id == $profile->id ? $profile->alias : '' }}
                        @endforeach
                    </p>
                </div>
            </div>
            <div class="navigation navigation__dashboard">
                <ul  class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a href="{{route('dashboard')}}" class="nav-link"><i class="bi bi-house"></i> Home</a></li>
                    <li class="nav-item"><a href="{{route('all_email')}}" class="nav-link"><i class="bi bi-envelope"></i> Email</a></li>
                    <hr>

                    <li class="nav-item"><a href="{{route('my_account')}}" class="nav-link"><i class="bi bi-check-circle"></i> Configurações</a></li>
                    <li class="nav-item"><a href="{{route('users')}}" class="nav-link"><i class="bi bi-person-fill"></i> Usuários</a></li>
                    <li class="nav-item"><a href="{{route('home')}}" class="nav-link"><i class="bi bi-houses-fill"></i> Ir para o site</a></li>
                </ul>
            </div>
            <div class="logout d-flex flex-column justify-content-center align-items-center">
                <a href="{{route('logout')}}" class="text-center">
                    <i class="bi bi-box-arrow-left"></i><br/>
                    Sair
                 </a>
            </div>
        </div>
        <div class="col-3"  style="padding: 0">
            <div class="sidebarinfo">
                <div class="sidebarinfo__header mb-2 d-flex justify-content-center align-items-center text-center">
                    <h3>Como posso utilizar o sistema?</h3>
                </div>
                <div class="sidebarinfo__content">
                    <p>
                        Olá seja bem vindo ao sistema, ele será utilizado para que seja enviado mensagens para clientes e outros colaboradores,
                        todo envio de emails deverá ser enviado pelo sistema.
                    </p>
                    <p>
                        Ao lado você encontrará  o menu de navegação onde você pode navegar tranquilamente pelo sistema, para voltar ao site basta clicar em ir para o site.
                    </p>
                    <p>
                        Caso queira alterar seus dados clique em Configurações e poderá atualizar seus dados sem problemas.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-7 d-flex"  style="padding: 0">
            <div class="conteudo d-flex flex-column">
                <div class="conteudo__header d-flex justify-content-around align-items-center w-100 ">
                    <div class="cardinfo">
                            <h5 class="card-title"><strong>Usuários Cadastrados</strong></h5>
                            <p class="card-text"><strong>{{$user->count()}}</strong></p>
                        </div>
                        <div class="cardinfo">
                            <h5 class="card-title"><strong>Mensagens Recebidas pelo SITE</strong></h5>
                            <p class="card-text"><strong>{{$contacts->count()}}</strong></p>
                        </div>
                        <div class="cardinfo">
                            <h5 class="card-title"><strong>Mensagens Enviadas pelo SISTEMA</strong></h5>
                            <p class="card-text"><strong>{{$emails->count()}}</strong></p>
                        </div>
                </div>
                <div class="conteudo__content w-100">

                    <div class="newcad d-flex justify-content-start align-items-center">
                        Seja muito bem vindo  - <strong> {{$user->name}}</strong>
                    </div>

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                              <th scope="col">ASSUNTO</th>
                              <th scope="col">DATA</th>
                              <th scope="col">DE</th>
                              <th scope="col">PARA</th>
                              <th scope="col">STATUS</th>
                              <th scope="col">AÇÃO</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($contacts as $contact)
                            <tr>
                              <th scope="row">{{$contact->assunto}}</th>
                                <td>{{$contact->created_at->format('m/d/Y H:i');}}</td>
                                <td>{{$contact->email}}</td>
                                <td>contato@pequenosanjos.com.br</td>
                                <td>
                                    @if ($contact->fluxo == 1)
                                    <span class="badge bg-danger">Não lido</span>
                                    @else
                                    <span class="badge bg-success">lido</span>
                                    @endif
                                </td>
                                <td><a href="{{route('dashboard')}}/mensagem/{{$contact->id}}"><i class="bi bi-eye" style="font-size: 16px"></i></a></td>
                                </tr>
                            @endforeach

                          </tbody>
                      </table>
                      {{ $contacts->onEachSide(0)->links() }}
                </div>
            </div>

        </div>
    </div>
</div>
    </body>
</html>
