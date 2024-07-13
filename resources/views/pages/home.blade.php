<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Instituto Pequenos Anjos</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
        <title>{{ config('app.name', 'Laravel') }}</title>
        {{-- <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}



    </head>
    <body>
        <x-base.header/>
        <x-slide/>

        <main>
            <div class="section o-instituto pY-5">
                <div class="container d-flex">
                    <div class="row  gx-5">
                    <div class="col-6">
                       <h2>O INSTITUTO<br/>
                            PEQUENOS ANJOS </h2>
                            <p>O Instituto Luta Pela Vida Pequenos Anjos é uma instituição não Governamental Sem Fins Lucrativos.

                                <p>Com mais de 5 anos atendendo pacientes que vem para tratamento de outros Estados como Consultas Médicas, Tratamentos, Cirurgias e Transplantes, sabemos o quanto é difícil estar sozinho em busca de tratamento, e acima de tudo o paciente em tratamento e sua família precisa de amparo, carinho e um ambiente que possa proporcionar segurança.</p>
                                <p>Nossa casa de apoio dará Moradia e Alimentação dar ajuda para marcar consultas, remédios, alimentação especial para quem precisa.</p>
                                <p>Todo suporte necessário, para que esses pacientes tenham um bom atendimento, e uma boa recuperação no seu período de tratamento. Damos apoio aos acompanhante e ao paciente, até o termino do tratamento ou tenha seu tratamento controlado.​</p>
                                <p>Precisamos de ajuda para manter nossa Casa de Apoio funcionando.</p>
                                <p>Mas isso só será possível se tivermos sua solidariedade, pois o Brasil está em crise, imagina pra quem não tem recurso e nem saúde é muito pior.</p>
                    </div>
                    <div class="col-6">
                        <img src="{{asset('assets/images/instituto.png') }}" class="img-fluid mx-auto d-block mb-4" alt="{{ config('app.name', 'Laravel') }}">
                        <div class="info mx-auto">
                            <p>Venha nos visitar e conhecer o Instituto Luta Pela Vida Pequenos Anjos.</p>
                            <p>Teremos o maior prazer em mostrar o que fazemos, pois fazemos com amor e carinho.</p>
                        </div>
                    </div>
                </div>
                </div>
                <div class="container d-flex  pt-5">
                    <div class="row gx-5">                    <div class="col">
                        <h2>MISSÃO</h2>
                        <P>Temos como objetivo atender Pacientes que vem de outros Estados tratar do Câncer e outras doenças.</P>
                    </div>
                    <div class="col">
                        <h2>VISÃO</h2>
                        <p>Dar apoio e acolhimento para a recuperação dos Adultos e Crianças.</p>
                    </div>
                    <div class="col">
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
                    <div class=" ">
                        <div class="col-12 d-flex align-items-center justify-content-center text-center py-5 row w-100 d-flex">
                            <h2 class="white">NOS AJUDE A FAZER A DIFERENÇA</h2>
                            <h4 class="white">(11) 2446-0408 | (11) 99649-0545</h4>
                        </div>
                        <div class="col-12 d-flex align-items-center justify-content-center">
                            <iframe width="70%" height="600" src="https://www.youtube.com/embed/gUYvp9b0qF0" title="Instituto Pequenos Anjos" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </body>
</html>
