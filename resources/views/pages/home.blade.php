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
        <x-base.header/>
        <x-slide/>

        <main>
            <div class="section o-instituto pY-5" id="oinstituto">
                <div class="container d-flex">
                    <div class="row  gx-5">
                        <div class="col-lg-6 col-md-12">

                            <h2>O INSTITUTO<br />
                                PEQUENOS ANJOS </h2>
                            <p>O Instituto Luta Pela Vida Pequenos Anjos é uma instituição não Governamental Sem Fins Lucrativos.

                            <p>Com mais de 8 anos atendendo pacientes que vem para tratamento de outros Estados como Consultas Médicas, Tratamentos, Cirurgias e Transplantes, sabemos o quanto é difícil
                                estar sozinho em busca de tratamento, e acima de tudo o paciente em tratamento e sua família precisa de amparo, carinho e um ambiente que possa proporcionar segurança.</p>
                            <p>Nossa casa de apoio dará Moradia e Alimentação dar ajuda para marcar consultas, remédios, alimentação especial para quem precisa.</p>
                            <p>Todo suporte necessário, para que esses pacientes tenham um bom atendimento, e uma boa recuperação no seu período de tratamento.
                                Oferecemos apoio aos acompanhante e ao paciente, até o termino do tratamento ou tenha seu tratamento controlado.</p>
                            <p>Precisamos de ajuda para manter nossa Casa de Apoio funcionando.</p>
                            <p>Mas isso só será possível se tivermos sua solidariedade, pois o Brasil está em crise, imagina pra quem não tem recurso e nem saúde é muito pior.</p>
                        </div>
                        <div class="col-lg-6 col-md-12">
                        <img src="{{asset('assets/images/instituto.png') }}" class="img-fluid mx-auto d-block mb-4" alt="{{ config('app.name', 'Laravel') }}">
                        <div class="info mx-auto">
                            <p>Venha nos visitar e conhecer o Instituto Luta Pela Vida Pequenos Anjos.</p>
                            <p>Teremos o maior prazer em mostrar o que fazemos, pois fazemos com amor e carinho.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container d-flex pt-5">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12">
                        <h2>MISSÃO</h2>
                        <P>Temos como objetivo atender Pacientes que vem de outros Estados tratar do Câncer e outras doenças.</P>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <h2>VISÃO</h2>
                        <p>Dar apoio e acolhimento para a recuperação dos Adultos e Crianças.</p>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <h2>VALORES</h2>
                        <ul>
                            <li>Solidariedade</li>
                            <li>Respeito</li>
                            <li>Amor ao próximo</li>
                            <li>Caridade a quem mais precisa</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>


        <div class="section helpme">
            <div class="container d-flex">
                <div class="row">
                    <div class="col-12 d-flex align-items-center justify-content-center text-center py-5 row w-100 d-flex">
                        <h2 class="white">NOS AJUDE A FAZER A DIFERENÇA</h2>
                        <h4 class="white">(11) 2446-0408 | (11) 99649-0545</h4>
                    </div>
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <iframe class="video" src="https://www.youtube.com/embed/gUYvp9b0qF0" title="Instituto Pequenos Anjos" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="section parceiros" id="parceiros" style="background: #f9f9f9;">
        <div class="container d-flex py-5">
            <div class="row gx-5">
                <div class="col-lg-6 col-md-12">

                    <div class="box d-flex align-items-center justify-content-center text-center">
                        <h2>NOSSOS PARCEIROS</h2>
                    </div>
                    <p>Os Parceiros do Instituto Pequenos Anjos, nos ajudam a manter a casa funcionando
                        e atendendo a quem precisa durante o ano.</p>
                    <p>Você ou sua Empresa também pode fazer parte dos Parceiros e Colaboradores Entre em Contato Conosco</p>
                </div>
                <div class="col-lg-6 col-md-12 d-flex justify-content-center align-items-center  ">
                    <a href="#contato" class="btn  btn-lg  btn-blue">SER PARCEIRO</a>
                </div>
            </div>
        </div>
    </div>
    <x-slider-parceiros/>
    <x-slider-embaixadores/>

<    <div class="section contato" id="contato">
    <div class="container-fluid">
        <div class="row w-100">
            <div class="col  col-md-12">
                <img src="{{asset('assets/images/bg-contato.jpg') }}" class="card-img-top" alt="{{ config('app.name', 'Laravel') }}">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex py-5 align-items-center justify-content-center text-center">
            <div class="box d-flex align-items-center justify-content-center text-center">
                <h2>CONTATO</h2>
            </div>
        </div>
        <div class="row py-5 ">
            <div class="col-lg-3 col-md-12">
                <a href="facebook.com/InstitutoPequenosAnjos/" target="_blank">
                    <div class="box d-flex flex-column  justify-content-center" style="height: 100px">
                        <a href="#" title=""><i class="bi bi-facebook"></i></a>
                        <span>@institutopequenosanjos</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-12">
                <a href="https://www.instagram.com/doacaoinstitutopequenosanjos/" target="_blank">
                    <div class="box d-flex flex-column  justify-content-center" style="height: 100px">
                        <a href="#" title=""><i class="bi bi-instagram"></i></a>
                        <span>@doacaoinstitutopequenosanjos</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-12">
                <a href="https://www.youtube.com/channel/UCp1Val8w-T01s4YRGIcfP6w" target="_blank">
                    <div class="box d-flex flex-column  justify-content-center" style="height: 100px">
                        <a href="#" title=""><i class="bi bi-youtube"></i></a>
                        <span>@institutopequenosanjos</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-12">
                <a href="https://api.whatsapp.com/send?phone=5511996490545">
                    <div class="box d-flex flex-column  justify-content-center" style="height: 100px">
                        <a href="#" title=""><i class="bi bi-whatsapp"></i></a>
                        <span>(11) 2446-0408</span>
                        <span>(11) 99649-0545</span>
                    </div>
                </a>
            </div>

        </div>
    </div>

    <div class="container py-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.301862050149!2d-46.47348631294131!3d-23.449573603016333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce8a79daf697a7%3A0x1eed406507b22916!2sRua%202%C2%BA%20Tenente%20Aviador%20M%C3%A1rio%20L.%20Figueiroa%2C%20212%20-%20Cidade%20Jardim%20Cumbica%2C%20Guarulhos%20-%20SP%2C%2007181-060!5e0!3m2!1spt-BR!2sbr!4v1720843490840!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                @if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
                <form method="POST" action="{{route('form_action')}}">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" value="" name="name" class="form-control" placeholder="Nome:" aria-label="nome" aria-describedby="nome" required>
                    </div>

                    <div class="input-group mb-3">
                        <input type="email" class="form-control" value="" name="email" placeholder="Email:" aria-label="email" aria-describedby="email" required>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control me-1" value="" name="telefone" placeholder="Telefone:" aria-label="Telefone" required>
                        <input type="text" class="form-control" value="" name="whatsapp" placeholder="Whatsapp:" aria-label="Whatsapp" required>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="" name="assunto" placeholder="Assunto:" aria-label="assunto" aria-describedby="assunto" required>
                    </div>
                    <div class="input-group mb-3">
                        <textarea name="descricao" value="" class="form-control" placeholder="Descrição" style="height: 300px" required>

                </textarea>
                    </div>
                    <div class="col-12">
                        <input type="submit" class="btn btn-blue" />
                    </div>

                </form>
            </div>
            <div class="col-lg-6 col-md-12 atendimento pt-md-2">
                <h3>ATENDIMENTO</h3>
                <p>De Segunda a Sexta<br />
                    das 8hs às 18 hs</p>
                <h3 class="mt-3">CONTATO</h3>
                <p>contato@pequenosanjos.com.br</p>
                <p>(11) 2446-0408</p>
                <p>(11) 99649-0545</p>
                <h3 class="mt-3">SEJA UM DOADOR</h3>
                <h5>DEPOSITO</h5>
                <p>Banco : BRADESCO - 237</p>
                <p>Agência: 1247</p>
                <p>Conta: 0009940-6</p>
                <h5 class="mt-3">PIX</h5>
                <p>Chave: 24756138000183</p>
                <p>Beneficiário: Instituto luta pela vida Pequenos Anjos</p>

            </div>
        </div>
    </div>
</div>
<x-base.copy/>
    {{-- <script src="{{ asset('build/assets/app-73f9d153.js')}}"></script> --}}
    </body>
</html>




