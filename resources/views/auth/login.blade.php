<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

        <link rel="stylesheet" href="{{asset('build/assets/app-ec8be896.css')}}" />
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

                    <form method="POST" action="{{route('login_action')}}">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <input
                                    id="email"
                                    type="email"
                                    class="form-control p-2 @error('nemail') is-invalid @enderror"
                                    name="email"
                                    value="{{ $email ?? '' }}"
                                    placeholder="{{ __('Digite seu e-mail') }}"
                                    required
                                    autocomplete="email"
                                    autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <input id="password"
                                type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                name="password"
                                placeholder="{{ __('Password') }}"
                                required
                                autocomplete="current-password"
                                >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="{{ asset('build/assets/app-73f9d153.js')}}"></script>
    </body>
</html>
