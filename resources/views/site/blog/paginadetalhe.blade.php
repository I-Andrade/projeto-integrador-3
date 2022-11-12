@extends('layouts.mainAdmin')



<br><br><br><br><br>

@section('title', 'Fernanda Carrijo')

@section('content')
    @php
        // $materias = [
        //     [
        //         'title' => 'Cor do Ano Pantone 2022',
        //         'created_at' => 'Nov 12',
        //         'text' => '“VIVEMOS TEMPOS DE TRANSFORMAÇÃO. Uma nova cor foi incluída à seleção de cores PANTONE FASHION, HOME +
        //     INTERIORS, e se chama PANTONE 17-3938 Very Peri, um símbolo do zeitgeist global deste momento e a transição pela qual
        //      todos estamos passando. Ao voltarmos a superfície depois de um intenso período de isolamento, nossas noções e padrões
        //       estão em transformação Apresenta uma atitude despreocupada e uma curiosidade instigante, que anima o nosso espírito
        //       criativo, a inquisidora e intrigante PANTONE 17-3938 Very Peri nos ajuda a abraçar este cenário alterado de
        //       possibilidades, nos abrindo para uma nova visão para reescrevermos as nossas vidas. Um mix entre a lealdade e a
        //       constância dos azuis e a energia e entusiasmo dos vermelhos, PANTONE 17-3938 Very Peri tem uma presença nova e dinâmica
        //        e uma energia brincalhona que encoraja a expressão pessoal. O mais feliz dos azuis e o mais caloroso, PANTONE® 17-3938
        //        Very Peri traz a mensagem do empoderamento neste mix de novidades, colocando o futuro a frente numa nova luz. “A Cor do
        //         Ano Pantone reflete o que está acontecendo em nossa cultura global, expressando o que as pessoas estão procurando
        //         através daquela cor e o que podem esperar em resposta às suas expectativas”, acrescentou Laurie Pressman,
        //         vice-presidente do Pantone Color Institute. Sobre pantone color of the year O processo de seleção da Cor do Ano requer
        //          decisões cuidadosas e muita análise de tendências. Para chegar à seleção de cada ano, os especialistas em cores da
        //          Pantone no Pantone Color Institute vasculham o mundo em busca de novas influências de cores. Isso pode incluir a
        //          indústria do entretenimento e filmes em produção, coleções de arte em viagem e novos artistas, moda, todas as áreas
        //           do design, destinos famosos de viagens, bem como novos estilos de vida, estilos de jogos e condições socioeconômicas.
        //            As influências também podem advir de novas tecnologias, materiais, texturas e efeitos que afetam a cor, plataformas
        //             de mídia social relevantes e até eventos esportivos futuros que capturam a atenção mundial. Durante 23 anos, a Cor
        //              do Ano da Pantone influenciou o desenvolvimento de produtos e as decisões de compra em vários setores, incluindo
        //              moda, decoração e design industrial, bem como embalagens de produtos e design gráfico.',
        //         'link_text' => 'Continue reading',
        //         'link_url' => 'blablabla',
        //         'image' => '1TyOnSxRsSqktffXuvxTjZh0ma0BvF97r',
        //     ],
        // ];

    @endphp

    <!-- Features -->
    <div class="container">

        <header class="blog-header py-3">
            <div class="row flex-nowrap align-items-center">
                <h1 class="display-4 fst-italic">BLOG</h1>
            </div>
        </header>


        <div class="nav-scroller py-1 mb-2 fst-italic">
            <nav class="nav d-flex justify-content-between">
                @foreach ($categorias as $categoria)
                    <a class="p-2 link-secondary" href="/blog/categoria/{{$categoria->id}}">
                        <h4>{{ $categoria->description }}</h4>
                    </a>
                @endforeach
            </nav>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="col p-4 d-flex flex-column position-static">
                    @foreach ($materias as $materia)
                        <h2 class="blog-post-title">{{ $materia->title }}</h2>
                        <div class="col d-none d-lg-block">
                            <img class="about-image" id="col" width="100%" height="300px"
                                src="https://drive.google.com/uc?export=view&id={{ $materia->image }}">

                        </div>
                        <p class="blog-post-meta">{{date('d/m/Y H:m:s', strtotime($materia->created_at))}} <a href="#">Mark</a></p>

                        <p>{{ $materia->text }}
                        </p>


                        <p>{{ $materia->link_text }}</p><a href="{{ $materia->link_url }}"
                            class="stretched-link">{{ $materia->link_url }}</a>

                        </p>
                    @endforeach
                </div>

            </div> <!-- end of col -->



        </div> <!-- end of row -->
        <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <br><br><br>


    </div> <!-- end of container -->
    </div>
    </div> <!-- end of tabs -->
    <!-- end of features -->

    <!-- Detalhe -->

    <!-- end of detalhe -->
@endsection
