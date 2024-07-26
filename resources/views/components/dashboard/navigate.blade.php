<div class="col-2" style="padding: 0">
    <div class="user user__dashboard  d-flex flex-column justify-content-center align-items-center">
        <div class="img-fluid user__dashboard__figure">
            <i class="bi bi-person-circle"></i>
        </div>
        <div class="user__dashboard__content text-center mt-2">
            <p style="padding:0; margin:0"><strong>{{$user->name}}</strong></p>
            <p style="padding:0; margin:0">{{$user->profile_id}}</p>
        </div>
    </div>
    <div class="navigation navigation__dashboard">
        <ul  class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-house"></i> Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-envelope"></i> Mensagem</a></li>
            <hr>
            <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-check-circle"></i> Configurações</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-person-fill"></i> Usuários</a></li>
        </ul>
    </div>
    <div class="logout d-flex flex-column justify-content-center align-items-center">
        <a href="#" class="text-center">
            <i class="bi bi-box-arrow-right"></i><br/>
            Sair
    </a>
    </div>
</div>
