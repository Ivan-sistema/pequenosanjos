<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>
    <body>
<div class="container-fluid">
    <div class="row d-flex justify-content-around">
        <div class="col-xl-9 col-md-8 background__img " ></div>
        <div class="col-xl-3 col-md-4">
            <div class="sidebar sidebar__auth sidebar--right">
                <div class="row" style="width: 80%;">
                    <div class="col">
                        <img src="{{asset('assets/images/logotipo.png') }}" class="img-fluid mb-5" style="width: 80%;" />
                        <form method="POST" action="{{ route('register_action')}}" >
                            @csrf
                            <div class="name-area  mb-3">
                                <input
                                    type="text"
                                    class="form-control p-2 @error('name') is-invalid @enderror"
                                    name="name"
                                    placeholder="Nome:"
                                    value="{{@old('name')}}">
                                    @error('name')
                                        <div class="error">
                                            {{$message}}
                                        </div>
                                    @enderror
                            </div>

                            <div class="email-area  mb-3">
                                <input
                                    type="text"
                                    class="form-control p-2 @error('email') is-invalid @enderror"
                                    name="email"
                                    placeholder="E-mail:" value="{{@old('email')}}">
                                @error('email')
                                    <div class="error">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <x-form.password-input name="password" placeholder="Digite sua senha :" id="digiteSenha" />
                            <x-form.password-input name="password_confirmation" placeholder="Confirme sua senha :" id="confirmeSenha_confirmation" />
                            <button class="button button-medium p-2">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
    </body>
</html>
