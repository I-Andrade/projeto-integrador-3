@extends('layouts.main')

<!-- Header -->
@include('layouts.header')


@section('title', 'Fernanda Carrijo')

@section('content')
@php
$categorias = ['Design', 'Mercado', 'Curiosidades', 'Mídias' ];
$materiasDestaques = [
    [ 'titulo' => ' PROJETO NATAL - “GREKOTONE” CHOTOCONE
                            RECHEADO COM CHEESECAKE',
        'data' => 'Nov 12',
        'descricao' => '“Diga adeus ao panetone de frutinha!”
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
                            granulado, trazendo a ideia do vintage.',
        'textoAntesLink' => 'Continue reading',
        'link' => 'blablabla',
        'idImagem' => 'images\portifolio\img36.jpg'
],
    [ 'titulo' => ' PROJETO NATAL - “GREKOTONE” CHOTOCONE
                                RECHEADO COM CHEESECAKE',
            'data' => 'Nov 12',
            'descricao' => '“Diga adeus ao panetone de frutinha!”
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
                                granulado, trazendo a ideia do vintage.',
            'textoAntesLink' => 'Continue reading',
            'link' => 'blablabla',
            'idImagem' => 'images\portifolio\img47.jpg'
        ]
];
$materias = [['titulo' => 'Cor do Ano Pantone 2022',
            'data' => 'Nov 12',
            'descricao' => '“VIVEMOS TEMPOS DE TRANSFORMAÇÃO. Uma nova cor foi incluída à seleção de cores PANTONE FASHION, HOME +
            INTERIORS, e se chama PANTONE 17-3938 Very Peri, um símbolo do zeitgeist global deste momento e a transição pela qual
             todos estamos passando. Ao voltarmos a superfície depois de um intenso período de isolamento, nossas noções e padrões
              estão em transformação Apresenta uma atitude despreocupada e uma curiosidade instigante, que anima o nosso espírito
              criativo, a inquisidora e intrigante PANTONE 17-3938 Very Peri nos ajuda a abraçar este cenário alterado de
              possibilidades, nos abrindo para uma nova visão para reescrevermos as nossas vidas. Um mix entre a lealdade e a
              constância dos azuis e a energia e entusiasmo dos vermelhos, PANTONE 17-3938 Very Peri tem uma presença nova e dinâmica
               e uma energia brincalhona que encoraja a expressão pessoal. O mais feliz dos azuis e o mais caloroso, PANTONE® 17-3938
               Very Peri traz a mensagem do empoderamento neste mix de novidades, colocando o futuro a frente numa nova luz. “A Cor do
                Ano Pantone reflete o que está acontecendo em nossa cultura global, expressando o que as pessoas estão procurando
                através daquela cor e o que podem esperar em resposta às suas expectativas”, acrescentou Laurie Pressman,
                vice-presidente do Pantone Color Institute. Sobre pantone color of the year O processo de seleção da Cor do Ano requer
                 decisões cuidadosas e muita análise de tendências. Para chegar à seleção de cada ano, os especialistas em cores da
                 Pantone no Pantone Color Institute vasculham o mundo em busca de novas influências de cores. Isso pode incluir a
                 indústria do entretenimento e filmes em produção, coleções de arte em viagem e novos artistas, moda, todas as áreas
                  do design, destinos famosos de viagens, bem como novos estilos de vida, estilos de jogos e condições socioeconômicas.
                   As influências também podem advir de novas tecnologias, materiais, texturas e efeitos que afetam a cor, plataformas
                    de mídia social relevantes e até eventos esportivos futuros que capturam a atenção mundial. Durante 23 anos, a Cor
                     do Ano da Pantone influenciou o desenvolvimento de produtos e as decisões de compra em vários setores, incluindo
                     moda, decoração e design industrial, bem como embalagens de produtos e design gráfico.',
            'textoAntesLink' => 'Continue reading',
            'link' => 'blablabla',
            'idImagem' => '1TyOnSxRsSqktffXuvxTjZh0ma0BvF97r'],
    ['titulo' => ' Você sabe a importância da identidade visual para casamento?',
            'data' => 'Nov 12',
            'descricao' => 'O convite é o primeiro contato dos convidados com o casamento,
             então ele sozinho já é muito importante pois diz muito do estilo dos noivos
             e consequentemente de como será o casamento. Mas além do convite a ID Visual
             engloba toda a papelaria, decoração e até mesmo as lembrancinhas, ou seja,
             ela define o estilo do casamento!
O trabalho de construção da ID Visual é apaixonante pois engloba o estilo do casal, gostos,
 sonhos, personalidade e a história dos noivos. Sim, a ID Visual é uma forma de contar a
 história do casal através do design.
A criação dessa identidade visual garante que todos os detalhes da festa estejam
harmônicos e conversando entre si.
Essa Identidade pode envolver a criação de monogramas, fontes especiais, estampas,
 texturas e uma paleta de cores específica. O padrão desenvolvido para o casal pode
  então ser aplicado nos itens de papelaria como convites, tags, menus, lágrimas
   de alegrias, cartões de agradecimento; em detalhes como topo de bolo, lousas,
    chalkboards, backdrops, embalagens de lembrancinhas, chinelos, etc; e também
     em itens da decoração, como objetos, flores, toalhas de mesa, etc.
Enfim, quando há o trabalho de desenvolvimento de uma ID Visual única para um
casal único, não há dúvidas que se trata de um casamento diferente de todos os
outros, mas realmente com a cara do casal.',
            'textoAntesLink' => 'Continue reading',
            'link' => 'blablabla',
            'idImagem' => '1Eh1hdBKg1FKTDLeCnIENsev9WFgcSV68',
    ], ['titulo' => ' Qual a importância de uma identidade visual bem resolvida para o seu negócio?',
            'data' => 'Nov 12',
            'descricao' => 'A identidade visual nada mais é do que um conjunto de elementos
             gráficos e visuais - cores, logotipo, tipografia, grafismo e slogan - que
             refletem um nome, ideia, produto, empresa ou serviço. Eles são responsáveis por identificar e dar personalidade à marca.
Nesse combo, também entram os aspectos não tangíveis, como a missão, valores e princípios.
 Juntos, eles tornam a marca conhecida e, consequentemente, reconhecida nos momentos de
  compra e tomadas de decisão.
Qual a importância da identidade visual?
Uma identidade visual arquitetada e marcante é uma estratégia essencial para a marca,
 isso porque ela leva ao reconhecimento e ao valor da marca. O principal fator de
 importância é que, com ela, é possível definir de forma visual, prática e
 “à primeira vista” quem é a empresa.
Se a marca não tem uma identidade visual que se comunique bem com seu público,
 pode passar a impressão de ser uma empresa de pouca credibilidade. Ou seja,
  a identidade visual gera sentimento de identificação e confiança.
Grandes nomes do mercado são representados por imagens e cores que despertam
 a lembrança cognitiva dos consumidores, até mesmo de forma inconsciente.
  Um M amarelo com um fundo vermelho, uma maçã mordida ou até mesmo a cor
  azul-turquesa com certeza devem te remeter a algumas marcas.
O que torna uma identidade visual ruim?
É fundamental evitar cometer erros de identidade visual para que a credibilidade
 da empresa não seja afetada. Listamos 7 erros que não devem ser cometidos:
Excesso de cores e efeitos;
Falta de clareza;
Escolher fontes complexas;
Falta de objetivo;
Logotipos irremediáveis;
Incompatibilidade com diferentes plataformas;
Usar logotipos “prontos” em sites.
Diferença entre Identidade visual e branding
Por mais que estejam ligados entre si, identidade visual e branding tem conceitos
 diferentes e é essencial saber distinguir.
Como explicado anteriormente, a identidade visual é o conjunto de elementos
 gráficos que ajudam a caracterizar a personalidade. Enquanto que o branding
  é o posicionamento estratégico e o gerenciamento da marca. Refere-se a um
   conjunto de ações que ajudam a fidelizar e encantar o cliente.
A identidade visual é capaz de influenciar diretamente nas vendas, isso
acontece porque ela influência na decisão de compra do consumidor. Oferecer
um site moderno, bem estruturado e atrativo, faz com que o usuário tenha
uma melhor experiência no momento da compra.
Quando devo contratar alguém para desenvolver minha Identidade Visual?
Muitas pessoas cometem o erro de procurar um profissional quando o projeto
 já está em andamento ou no pior dos casos, nos finalmente.
Como já vimos, identidade visual é um conjunto de diversos fatores de uma
 marca e ela nasce no começo do projeto, ajudando a desenvolver a persona,
  tom de voz, estilos, cores e etc. por exemplo, você faz um projeto
  arquitetônico sem a ID visual. Com isso, pode ocorrer de fugir da
  essência da marca e passando uma mensagem que vai ao contrário da
   intenção, então você tem um ambiente que não conversa com a marca.
Ou seja, você deve procurar um profissional assim que seu projeto
estiver no papel, para que todas as áreas possam conversar e criar
 a personalidade da marca. Lembrando que a ID visual não é apenas o logotipo.
Quer que seu negócio comece com o pé direito? Eu posso te ajudar ;)',
            'textoAntesLink' => 'Responda o formulário e receba sua proposta:',
            'link' => 'https://forms.gle/cvgFe3DMgCjFt1s69',
            'idImagem' => '1Ew2EX6XtJZXJmtOa8arKCofAWN1uzurf']
];
@endphp
<div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap align-items-center">
        <h1 class="display-4 fst-italic" >BLOG</h1>
      </div>
    </header>

    <div class="nav-scroller py-1 mb-2 fst-italic">
      <nav class="nav d-flex justify-content-between">
        @foreach($categorias as $categoria)
        <a class="p-2 link-secondary" href="#"><h4>{{$categoria}}</h4></a>
        @endforeach
      </nav>
    </div>
  </div>

    <main class="container">


        <div class="row mb-2">
            @foreach($materiasDestaques as $materiaDestaque)
            <div class="col-md-6">

                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

                    <div class="col p-4 d-flex flex-column position-static">



                        <h3 class="mb-0">{{$materiaDestaque['titulo']}}</h3>
                        <div class="mb-1 text-muted">{{$materiaDestaque['data']}}</div>
                        <p class="card-text mb-auto">{{$materiaDestaque['descricao']}}</p>
                        <p>{{$materiaDestaque['textoAntesLink']}}</p>
                        <a href="detalhesblog" class="stretched-link">{{$materiaDestaque['link']}}</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">

                        <img class="about-image"  id="col-auto-img" width="400px" height="300px" src="{{$materiaDestaque['idImagem']}}"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">



                    </div>

                </div>

            </div>
 @endforeach
        </div>

        <div class="row g-5">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom">
                    Postagens
                </h3>

                <article class="blog-post">
                    @foreach($materias as $materia)
                    <h2 class="blog-post-title">{{$materia['titulo']}}</h2>
                    <p class="blog-post-meta">{{$materia['data']}} <a href="#">Mark</a></p>

                    <p>{{$materia['descricao']}}
                        </p>


                    <div class="col d-none d-lg-block">
                        <img class="about-image" width="600px" height="400px" src="https://drive.google.com/uc?export=view&id={{$materia['idImagem']}}" width="200" height="250"
                            role="img"
                            focusable="false">

                    </div><p>{{$materia['textoAntesLink']}}</p><a href="detalhesblog" class="stretched-link">{{$materia['link']}}</a>

                    </p>
                    <hr>
                </article>
                @endforeach







                <nav class="blog-pagination" aria-label="Pagination">
                    <a class="btn btn-outline-primary" href="#">Anterior</a>
                    <a class="btn btn-outline-secondary disabled">Próximo</a>
                </nav>

            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-light rounded">
                        <div class="about-image">
                            <img src="images\foto-fer_home.png">
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
                        <ol class="list-unstyled2 mb-0">
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