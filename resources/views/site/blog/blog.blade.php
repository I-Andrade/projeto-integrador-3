@extends('layouts.main')
<!-- Preloader -->
@include('layouts.preloader')
<!-- end of preloader -->
<!-- Header -->
@include('layouts.header')


@section('title', 'Fernanda Carrijo')

@section('content')
    @php
        $categorias = ['Design', 'Mercado', 'Curiosidades', 'Mídias'];
        $materiasDestaques = [
            [
                'titulo' => ' PROJETO NATAL - “GREKOTONE” CHOTOCONE
                            RECHEADO COM CHEESECAKE',
                'data' => 'Nov 12',
                'descricao' => '“Diga adeus ao panetone de frutinha!”
                            “Vem ano, vai ano e não dá mais pra continuar
                            na mesmice”.
                            O objetivo é trazer um produto tradicional,
	@@ -28,15 +29,15 @@
                            tradicional: cores dourado, vermelho e verde,
                            fundo que simula um pano xadrez e o efeito
                            granulado, trazendo a ideia do vintage.',
                'textoAntesLink' => 'Continue reading',
                'link' => 'blablabla',
                'idImagem' => 'images\portifolio\img36.jpg',
            ],
            [
                'titulo' => ' PROJETO NATAL - “GREKOTONE” CHOTOCONE
                                RECHEADO COM CHEESECAKE',
                'data' => 'Nov 12',
                'descricao' => '“Diga adeus ao panetone de frutinha!”
                                “Vem ano, vai ano e não dá mais pra continuar
                                na mesmice”.
                                O objetivo é trazer um produto tradicional,
	@@ -49,15 +50,16 @@
                                tradicional: cores dourado, vermelho e verde,
                                fundo que simula um pano xadrez e o efeito
                                granulado, trazendo a ideia do vintage.',
                'textoAntesLink' => 'Continue reading',
                'link' => 'blablabla',
                'idImagem' => 'images\portifolio\img47.jpg',
            ],
        ];
        $materias = [
            [
                'titulo' => 'Cor do Ano Pantone 2022',
                'data' => 'Nov 12',
                'descricao' => '“VIVEMOS TEMPOS DE TRANSFORMAÇÃO. Uma nova cor foi incluída à seleção de cores PANTONE FASHION, HOME +
            INTERIORS, e se chama PANTONE 17-3938 Very Peri, um símbolo do zeitgeist global deste momento e a transição pela qual
             todos estamos passando. Ao voltarmos a superfície depois de um intenso período de isolamento, nossas noções e padrões
              estão em transformação Apresenta uma atitude despreocupada e uma curiosidade instigante, que anima o nosso espírito
	@@ -77,12 +79,14 @@
                    de mídia social relevantes e até eventos esportivos futuros que capturam a atenção mundial. Durante 23 anos, a Cor
                     do Ano da Pantone influenciou o desenvolvimento de produtos e as decisões de compra em vários setores, incluindo
                     moda, decoração e design industrial, bem como embalagens de produtos e design gráfico.',
                'textoAntesLink' => 'Continue reading',
                'link' => 'blablabla',
                'idImagem' => '1TyOnSxRsSqktffXuvxTjZh0ma0BvF97r',
            ],
            [
                'titulo' => ' Você sabe a importância da identidade visual para casamento?',
                'data' => 'Nov 12',
                'descricao' => 'O convite é o primeiro contato dos convidados com o casamento,
             então ele sozinho já é muito importante pois diz muito do estilo dos noivos
             e consequentemente de como será o casamento. Mas além do convite a ID Visual
             engloba toda a papelaria, decoração e até mesmo as lembrancinhas, ou seja,
	@@ -101,13 +105,14 @@
Enfim, quando há o trabalho de desenvolvimento de uma ID Visual única para um
casal único, não há dúvidas que se trata de um casamento diferente de todos os
outros, mas realmente com a cara do casal.',
                'textoAntesLink' => 'Continue reading',
                'link' => 'blablabla',
                'idImagem' => '1Eh1hdBKg1FKTDLeCnIENsev9WFgcSV68',
            ],
            [
                'titulo' => ' Qual a importância de uma identidade visual bem resolvida para o seu negócio?',
                'data' => 'Nov 12',
                'descricao' => 'A identidade visual nada mais é do que um conjunto de elementos
             gráficos e visuais - cores, logotipo, tipografia, grafismo e slogan - que
             refletem um nome, ideia, produto, empresa ou serviço. Eles são responsáveis por identificar e dar personalidade à marca.
Nesse combo, também entram os aspectos não tangíveis, como a missão, valores e princípios.
	@@ -159,62 +164,55 @@
estiver no papel, para que todas as áreas possam conversar e criar
 a personalidade da marca. Lembrando que a ID visual não é apenas o logotipo.
Quer que seu negócio comece com o pé direito? Eu posso te ajudar ;)',
                'textoAntesLink' => 'Responda o formulário e receba sua proposta:',
                'link' => 'https://forms.gle/cvgFe3DMgCjFt1s69',
                'idImagem' => '1Ew2EX6XtJZXJmtOa8arKCofAWN1uzurf',
            ],
        ];
    @endphp
    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap align-items-center">
                <h1 class="display-4 fst-italic">BLOG</h1>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-2 fst-italic">
            <nav class="nav d-flex justify-content-between">
                @foreach ($categorias as $categoria)
                    <a class="p-2 link-secondary" href="#">
                        <h4>{{ $categoria }}</h4>
                    </a>
                @endforeach
            </nav>
        </div>
    </div>

    <main class="container">
        <div class="row mb-2">
            @foreach ($materiasDestaques as $materiaDestaque)
                <div class="col-md-6">

                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 ">

                        <div class="col p-4 d-flex flex-column position-static">
                            <h3 class="mb-0">{{ $materiaDestaque['titulo'] }}</h3>
                            <div class="mb-1 text-muted">{{ $materiaDestaque['data'] }}</div>
                            <p class="card-text mb-auto">{{ $materiaDestaque['descricao'] }}</p>
                            <p>{{ $materiaDestaque['textoAntesLink'] }}</p>
                            <a href="detalhesblog" class="stretched-link">{{ $materiaDestaque['link'] }}</a>
                            <img class="about-image" id="col" width="100%" height="300px"
                                src="{{ $materiaDestaque['idImagem'] }}">
                        </div>
                        <div></div>
                        <div class="col-auto d-none d-lg-block">

                        </div>
                    </div>

                </div>
            @endforeach
        </div>

        <div class="row g-5">
	@@ -224,23 +222,25 @@
                </h3>

                <article class="blog-post">
                    @foreach ($materias as $materia)
                        <h2 class="blog-post-title">{{ $materia['titulo'] }}</h2>
                        <p class="blog-post-meta">{{ $materia['data'] }} <a href="#">Mark</a></p>

                        <p>{{ $materia['descricao'] }}
                        </p>


                        <div class="col d-none d-lg-block">
                            <img class="about-image" width="600px" height="400px"
                                src="https://drive.google.com/uc?export=view&id={{ $materia['idImagem'] }}" width="200"
                                height="250" role="img" focusable="false">

                        </div>
                        <p>{{ $materia['textoAntesLink'] }}</p><a href="detalhesblog"
                            class="stretched-link">{{ $materia['link'] }}</a>

                        </p>
                        <hr>
                </article>
                @endforeach