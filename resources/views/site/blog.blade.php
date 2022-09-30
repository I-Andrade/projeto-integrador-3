@extends('layouts.main')
<!-- Preloader -->
@include('layouts.preloader')
<!-- end of preloader -->
<!-- Header -->
@include('layouts.header')


@section('title', 'Fernanda Carrijo')

@section('content')
<div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap align-items-center">
        <h1 class="display-4 fst-italic">BLOG</h1>
      </div>
    </header>

    <div class="nav-scroller py-1 mb-2 fst-italic">
      <nav class="nav d-flex justify-content-between">
        <a class="p-2 link-secondary" href="#"><h4>Design</h4></a>
        <a class="p-2 link-secondary" href="#"><h4>Mercado</h4></a>
        <a class="p-2 link-secondary" href="#"><h4>Curiosidades</h4></a>
      </nav>
    </div>
  </div>

    <main class="container">


        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">PROJETO NATAL </strong>
                        <h3 class="mb-0">“GREKOTONE” CHOTOCONE
                            RECHEADO COM CHEESECAKE</h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">“Diga adeus ao panetone de frutinha!”
                            “Vem ano, vai ano e não dá mais pra continuar
                            na mesmice”.
                            O objetivo é trazer um produto tradicional,
                            já bem conhecido, porém com um toque a
                            mais: recheado de cheesecake! O cliente fica
                            instigado a comprar por ser algo diferente e
                            sazonal, e claro, a comunicação com um tom
                            humorado para trazer a leveza da marca.
                            O layout traz características de um natal
                            tradicional: cores dourado, vermelho e verde,
                            fundo que simula um pano xadrez e o efeito
                            granulado, trazendo a ideia do vintage.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">

                        <img class="about-image" width="200" height="250" src="images\portifolio\img36.jpg"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                        <title>Placeholder</title>


                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">PROJETO HALLOWEEN</strong>
                        <h3 class="mb-0">“AS IGUARIAS DO SUBMUNDO”
                        </h3>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <p class="mb-auto">“Que tal garantir o seu doce sem precisar de
                            travessura?”
                            Já ouvimos falar que quem não é visto não é
                            lembrado, não é mesmo? O objetivo dessa campanha
                            é movimentar a marca, fazer com que seja
                            comentada por trazer uma ação cômica e inesperada,
                            bem estilo Burguer King®
                            .
                            Trabalhamos com sabores que já havia em nosso
                            catálogo, porém “fantasiados”, com a redação
                            “aproveite! A edição é limitada”, o desejo de consumo
                            é despertado, porquê para o ser humano não
                            podemos ficar de fora.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="about-image" width="200" height="250" src="images\portifolio\img47.jpg" width="200" height="250"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>



                    </div>
                </div>
            </div>
        </div>

        <div class="row g-5">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom">
                    Postagens
                </h3>

                <article class="blog-post">
                    <h2 class="blog-post-title">CAFÉ
                        TERREIRO</h2>
                    <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>

                    <p>Desenvolvimento da identidade de comunicação: criação de posts (arte),
                        site institucional e embalagens.
                        </p>

                    <p> PÚBLICO-ALVO
                        Mulher e homem | Entre 25 a 64 anos | Classe média à média-alta
                    </p>
                    <p>Adultos que buscam aquele cafézinho tradicional, para apreciar de manhã
                        ao acordar ou a tarde, junto com a família e amigos.
                        OBJETIVO
                        Renovar a identidade de todo material da marca, trazendo um toque
                        vintage e tradicional. Necessidade desenvolver o layout para o site
                        institucional na mesma linguagem.
                        </p>
                    <div class="col-auto d-none d-lg-block">
                        <img class="about-image" width="600" height="400" src="images\portifolio\img64.jpg" width="200" height="250"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                    </div>
                    <p>HTML defines a long list of available inline tags, a complete list of which can be found on the <a
                            href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element">Mozilla Developer Network</a>.
                    </p>
                    <hr>
                </article>

                <article class="blog-post">

                    <h2 class="blog-post-title">PROJETO - SITE
                        TERREIRO</h2>
                    <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>

                    <p>“Compre de quem produz”
                        O objetivo era desenvolver um site institucional com estilo
                        “vintage moderno”, para comunicar a tradição e origem da
                        marca e produtos de forma clean e funcional.
                        Pensando no público e no que a marca queria transmitir, a
                        proposta para o projeto foi de combinar fonte serif com sans
                        serif em caixa alta e todos os textos em tamanho grande,
                        facilitando assim a legibilidade da leitura.
                        Os botões assim como os selos, tem a mesma estética que
                        das embalagens e comunicação da marca, mantendo a
                        identidade e facilitando o reconhecimento da marca.
                        As imagens foram trabalhadas de forma que trouxesse essa
                        sensação do tradicional e acolhedor (bem casa de vó), em uma
                        paleta de cores com tons quentes e terrosos.
                        </p>

                    <p> PÚBLICO-ALVO
                        Mulher e homem | Entre 25 a 64 anos | Classe média à média-alta
                    </p>
                    <p>Adultos que buscam aquele cafézinho tradicional, para apreciar de manhã
                        ao acordar ou a tarde, junto com a família e amigos.
                        OBJETIVO
                        Renovar a identidade de todo material da marca, trazendo um toque
                        vintage e tradicional. Necessidade desenvolver o layout para o site
                        institucional na mesma linguagem.
                        </p>
                    <div class="col-auto d-none d-lg-block">
                        <img class="about-image" width="600" height="400" src="images\portifolio\img71.jpg" width="200" height="250"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                    </div>
                    <p>HTML defines a long list of available inline tags, a complete list of which can be found on the <a
                            href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element">Mozilla Developer Network</a>.
                    </p>
                    <hr>

                </article>



                <nav class="blog-pagination" aria-label="Pagination">
                    <a class="btn btn-outline-primary" href="#">Anterior</a>
                    <a class="btn btn-outline-secondary disabled">Próximo</a>
                </nav>

            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-light rounded">
                        <div class="about-image">
                            <img src="images\Designer.png">
                        </div>
                        <h2>Fernanda</h2>
                        <h3>Moreira Carrijo Andrade</h3>
                        <p>Sempre disposta a aprender e ensinar, sou uma pessoa bastante alegre, bem
                            humorada e muito honesta. Tenho bom relacionamento com os colegas com
                            quem trabalho ou já trabalhei, mesmo fora da empresa.</p>
                        <p>Tenho facilidade com programas e softwares, sou organizada do workspace aos
                            layouts, arquivos e pauta, esforçada para entregar com qualidade tudo que estiver
                            ao meu alcance e perfeccionista quando o assunto é planejamento e criação.
                            Dedicada, visto a camisa do meu time e me entrego de cabeça e coração para
                            sempre irmos mais longe.</p>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Arquivo</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="#">March 2021</a></li>
                            <li><a href="#">February 2021</a></li>
                            <li><a href="#">January 2021</a></li>
                            <li><a href="#">December 2020</a></li>
                            <li><a href="#">November 2020</a></li>
                            <li><a href="#">October 2020</a></li>
                            <li><a href="#">September 2020</a></li>
                            <li><a href="#">August 2020</a></li>
                            <li><a href="#">July 2020</a></li>
                            <li><a href="#">June 2020</a></li>
                            <li><a href="#">May 2020</a></li>
                            <li><a href="#">April 2020</a></li>
                        </ol>
                    </div>


                </div>
            </div>
        </div>

    </main>
@endsection
