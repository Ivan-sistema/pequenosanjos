<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <span class="fs-4">
            <img src="{{asset('assets/images/logotipo.png') }}" alt="Logotipo | {{ config('app.name', 'Laravel') }}">
        </span>
      </a>

      <ul class="nav nav-pills d-flex align-items-center ">
        <li class="nav-item"><a href="#" class="nav-link" aria-current="page">HOME</a></li>
        <li class="nav-item"><a href="#" class="nav-link">O-INSTITUTO</a></li>
        <li class="nav-item"><a href="#" class="nav-link">PARCEIROS</a></li>
        <li class="nav-item"><a href="#" class="nav-link">CONTATO</a></li>
        <li class="nav-item"><a href="{{route('doacao')}}" class="nav-link">SER APOIADOR</a></li>
      </ul>
    </header>
  </div>
