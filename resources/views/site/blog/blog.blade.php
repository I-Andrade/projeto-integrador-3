@extends('layouts.main')

<!-- Header -->
@include('layouts.header')


@section('title', 'Fernanda Carrijo')

@section('content')
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap align-items-center">
        <h1 class="display-4 fst-italic">BLOG</h1>
      </div>
    </header>

    <div class="nav-scroller py-1 mb-2 fst-italic">
      <nav class="nav d-flex justify-content-between">
        @foreach($categorias as $categoria)
        <a class="p-2 link-secondary" href="/blog/categoria/{{$categoria->id}}">
            <h4 style="{{ $categoriaFiltrada == $categoria->id ? 'color:red' : 'color:grey'}}">
                {{$categoria->description}}
            </h4>
        </a>
        @endforeach
      </nav>
    </div>
  </div>

    <main class="container">


        <div class="row mb-2">
            @foreach($blogsDestaques as $blogDestaque)
            <div class="col-md-6">

                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

                    <div class="col p-4 d-flex flex-column position-static">



                        <h3 class="mb-0">{{$blogDestaque->title}}</h3>
                        <div class="mb-1 text-muted">{{date('d/m/Y H:m:s', strtotime($blogDestaque->created_at))}}</div>
                        <p class="card-text mb-auto">{{$blogDestaque->text}}</p>
                        <p>{{$blogDestaque->link_text}}</p>
                        <a href="/blog/{{$blogDestaque->id}}" class="stretched-link">{{$blogDestaque->link_url}}</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">

                        <img class="about-image"  id="col-auto-img" width="400px" height="300px" src="{{$blogDestaque['idImagem']}}"
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

                @foreach($blogs as $blog)
                <article class="blog-post position-relative">
                    <h2 class="blog-post-title">{{$blog->title}}</h2>
                    <p class="blog-post-meta">{{date('d/m/Y H:m:s', strtotime($blog->created_at))}} <a href="#">Fernanda Carrijo</a></p>

                    <p>{{$blog->text}}
                        </p>


                    <div class="col d-none d-lg-block">
                        <img class="about-image" width="600px" height="400px" src="{{"https://drive.google.com/uc?export=view&id=$blog->image"}}" width="200" height="250"
                            role="img"
                            focusable="false">

                    </div><p>{{$blog->link_text}}</p><a href="/blog/{{$blog->id}}" class="stretched-link">{{$blog->link_url}}</a>

                    </p>
                    <hr>
                </article>
                @endforeach

                <br>
                <nav class="blog-pagination" aria-label="Pagination">
                    <a class="btn btn-outline-primary" href="#">Anterior</a>
                    <a class="btn btn-outline-secondary disabled">Próximo</a>
                </nav>
                <br><br><br>
            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-light rounded">
                        <div style = 'margin-left: 40px' class="about-image">
                            <img style = 'height:250; width: 200; margin-bottom: 12px;'src="/images/foto-fer_home.png">
                        </div>
                        <h3>Fernanda Carrijo</h3>
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
                            @foreach($blogs as $blog)
                            <li><a href="/blog/{{$blog->id}}">{{$blog->title}}</a></li>
                            @endforeach
                        </ol>
                    </div>
                    <br><br><br>    
                </div>
            </div>
        </div>

    </main>
@endsection
