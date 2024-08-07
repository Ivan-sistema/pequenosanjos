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
                    <h3>Como posso atualizar meus dados?</h3>
                </div>
                <div class="sidebarinfo__content">
                    <p>
                        Nesse link você poderá atualizar todos seus dados, importante não trocar o seu email.
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
                    <div class="newcad d-flex justify-content-between align-items-center">
                        <p>EMAILS</p>
                        <a class="btn btn-outline-success" href="{{route('new_email')}}">NOVO EMAIL +</a>
                    </div>
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-6">
                            <img src="{{asset('assets/images/calendar.png') }}" class="img-fluid mx-auto d-block mb-4" alt="{{ config('app.name', 'Laravel') }}">
                        </div>
                        <div class="col-6">
                            @foreach ($emails as $email)
                                <a href="{{route('dashboard')}}/email/{{$email->id}}" style="text-decoration: none; color: #000;">
                                    <div class="email__info d-flex align-items-center justify-content-center">
                                        <div class="email__info--data">
                                            <span><strong>{{$email->created_at->format('d');}}</strong></span>
                                            <span>{{$email->created_at->format('H:i');}}</span>
                                        </div>
                                        <div class="email__info--description">
                                            <p>Usuário: {{$email->name}} </p>
                                            <p>Para:  {{$email->email}}</p>
                                            <p><strong>{{$email->assunto}}</strong></p>
                                        </div>
                                    </div>
                                </a>
                            @endforeach


                            {{ $emails->onEachSide(0)->links() }}

                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
        </div>
        </body>
        </html>
