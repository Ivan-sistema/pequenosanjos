<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
        <title>{{ config('app.name', 'Laravel') }} - Perfil</title>
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
                        <form method="POST" action="{{ route('select_profile_action')}}" >
                            @csrf
                            <div class="profile-area">
                                <select name="profile">
                                    @foreach ($profiles as $profile)
                                        <option value="{{$profile->id}}">{{$profile->alias}}</option>
                                    @endforeach
                                </select>
                            </div>
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
