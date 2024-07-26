<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
        {{-- <link rel="stylesheet" href="{{asset('build/assets/app-ec8be896.css')}}" /> --}}
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>
    <body>
        <x-base.header/>
        <x-slidedoacao/>

        <main>
            <div class="section o-instituto pY-5" id="oinstituto">
                <div class="container d-flex">
                    <div class="row  gx-5">
                        <div class="col-lg-6 col-md-12">

                            <h2>PORQUE SER <br />
                            UM DOADOR ?</h2>

                            <p>Ser um doador do Instituto Pequeno Anjos significa transformar vidas de crianças vulneráveis. </p>
                            <p>Sua doação oferece alimentação, educação e cuidados essenciais, garantindo um futuro melhor para elas. Junte-se a nós e faça a diferença!</p>
                        </div>
                        <div class="col-lg-6 col-md-12">

                            <h2>COMO SER <br />
                            UM DOADOR ?</h2>

                            <p>Você pode se tornar um doador de 2 maneiras facéis e rapido.</p>
                            <p>Atrávez de um depósito bancário ou</p>
                            <p>Via PIX</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section o-instituto pb-5">
                <div class="container d-flex">
                    <div class="row  g-2">
                        <div class="col-lg-4 col-md-12">
                            <div class="info mx-auto" style="width: 100%;height: 195px;">
                                <h5 class="mt-3">PIX</h5>
                                <p>Chave: 24756138000183</p>
                                <p>Beneficiário: Instituto luta pela vida Pequenos Anjos</p>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="info mx-auto" style="width: 100%;height: 195px;">
                                <h5 class="mt-3">DEPOSITO</h5>
                        <p>Banco : BRADESCO - 237</p>
                        <p>Agência: 1247</p>
                        <p>Conta: 0009940-6</p>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="info mx-auto" style="width: 100%;height: 195px;">
                                <h5 class="mt-3">OUTRAS DOAÇÕES</h5>
                        <p>Caso você queira doar cestas basicas, roupas e etc.. por favor chame no whatsapp.</p>
                        <p><a href="https://api.whatsapp.com/send?phone=5511996490545" target="_blank" style="color: #f9f9f9;">(11) 99649-0545</a></p>
                            </div>

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
            <div class="col  col-md-12"><img src="assets/images/bg-contato.jpg" class="card-img-top" alt="Instituto Pequenos Anjos">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex py-5 align-items-center justify-content-center text-center">
            <div class="box d-flex align-items-center justify-content-center text-center">
                <h2>CONTATO</h2>
            </div>
        </div>
    </div>


    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <form method="POST" action="{{route('form_action')}}">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" value="" name="nome" class="form-control" placeholder="Nome:" aria-label="nome" aria-describedby="nome" required>
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




