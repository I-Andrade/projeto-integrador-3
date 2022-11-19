@extends('layouts.mainAdmin')

<!-- Header -->
<!-- @include('layouts.header') -->


@section('title', 'Fernanda Carrijo - Blog')

@section('content')
<br><br><br><br><br>
<div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap align-items-center">
        <a style="text-decoration:none" href="/blogs">
            <h1 class="display-4 fst-italic">BLOG</h1>
        </a>
      </div>
    </header>

    <div class="nav-scroller py-1 mb-2 fst-italic" style="background-color: #f9f5f0;">
      <nav class="nav d-flex justify-content-around" style="align-items-center" >
        @foreach($categorias as $categoria)
        <a class="p-3 link-secondary" href="/blog/categoria/{{$categoria->id}}">
            <h4 class="mb-0" style="{{ $categoriaFiltrada == $categoria->id ? 'color:red' : 'color:grey'}}">
                {{strtoupper($categoria->description)}}
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

                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 ml-0 shadow-sm h-md-250 position-relative">

                    <div class="col p-4 d-flex flex-column position-static">

                        <h3 class="mb-0">
                            {{$blogDestaque->title}}
                        </h3>

                        <div class="mb-1 text-muted">
                            {{date('d/m/Y H:m:s', strtotime($blogDestaque->created_at))}} [{{$blogDestaque->views}} {{ $blogDestaque->views > 1 ? 'visualizações' : 'visualização'}}]
                        </div>

                        <p class="card-text mb-auto" align="justify">
                            @if (strlen($blogDestaque->text)>400)
                                {{ substr($blogDestaque->text,0,400) }}... <i><b style="color:#E45032">ler mais...</b></i> 
                            @else
                                {{ $blogDestaque->text }}
                            @endif      
                        </p>

                        {{-- <p>
                            {{$blogDestaque->link_text}}
                        </p> --}}
                        
                        {{-- <a href="/blog/{{$blogDestaque->id}}" class="stretched-link">
                            {{$blogDestaque->link_url}}
                        </a> --}}
                        <a href="/blog/{{$blogDestaque->id}}" class="stretched-link">
                            &nbsp;
                        </a>


                    </div>
                    @if($blogDestaque->image)
                        {{-- <div class="col-auto d-none d-lg-block">
                            <img class="about-image"   id="col-auto-img" src="{{$blogDestaque->image}}"
                                        role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                        focusable="false">
                        </div> --}}
                    @endif
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
                    <p class="blog-post-meta">{{date('d/m/Y H:m:s', strtotime($blog->created_at))}} [{{$blog->views}} {{ $blog->views > 1 ? 'visualizações' : 'visualização'}}]</p>

                    <p align="justify">
                        @if (strlen($blog->text)>400)
                            {{ substr($blog->text,0,400) }}... <i><b style="color:#E45032">ler mais...</b></i> 
                        @else
                            {{ $blog->text }}
                        @endif
                    </p>

   

                    @if($blog->image)
                        <div class="col d-none d-lg-block" style="max-height:500px;">
                            <img class="about-image" width="100%" style="max-height:500px;" src="{{$blog->image}}"
                                role="img"
                                focusable="false">
                        </div>
                    @endif
                    
                    @if($blog->link_text)
                        <p>{{$blog->link_text}}</p>
                        
                        @if($blog->link_url)
                            <a href="/blog/{{$blog->id}}" class="stretched-link">
                                {{$blog->link_url}}
                            </a>
                        @endif
                    @else
                        <a href="/blog/{{$blog->id}}" class="stretched-link">
                            &nbsp;
                        </a>
                    @endif
                    
                    <hr>
                </article>
                @endforeach

                <br>
                <nav class="blog-pagination nav d-flex justify-content-center" aria-label="Pagination">
                    
                    @if($blogs->currentPage()<>1)     
                        <a href="/blog{{$categoriaFiltrada == 0 ? 's' : '/categoria/' . $categoriaFiltrada}}?page={{$blogs->currentPage()-1 < 1 ? 1 : $blogs->currentPage()-1}}">
                    @endif
                        <button class="btn btn-outline-dark" style="background-color: #E45032;color:#f9f5f0" {{$blogs->currentPage()==1 ? 'disabled' : ''}}>
                            Anterior
                        </button>
                    @if($blogs->currentPage()<>1)
                        </a> 
                    @endif

                    @for ($i = 1; $i <= $blogs->lastPage(); $i++)
                        @if($blogs->currentPage()<>$i)                            
                            <a href="/blog{{$categoriaFiltrada == 0 ? 's' : '/categoria/' . $categoriaFiltrada}}?page={{$i}}">
                        @endif
                            <button class="btn btn-outline-dark" {{$blogs->currentPage()==$i ? 'disabled style=background-color:#E45032;color:#f9f5f0;' : ''}}> 
                                {{$i}}
                            </button>
                        @if($blogs->currentPage()<>$i)                            
                            </a>
                        @endif
                    @endfor
                    
                    @if($blogs->currentPage()<>$blogs->lastPage())
                        <a href="/blog{{$categoriaFiltrada == 0 ? 's' : '/categoria/' . $categoriaFiltrada}}?page={{$blogs->currentPage()+1 > $blogs->lastPage() ? $blogs->lastPage() : $blogs->currentPage()+1}}">
                    @endif
                        <button class="btn btn-outline-dark" style="background-color: #E45032;color:#f9f5f0" {{$blogs->currentPage()==$blogs->lastPage() ? 'disabled' : ''}}>
                            Próximo
                        </button>
                    @if($blogs->currentPage()<>$blogs->lastPage())
                        </a>  
                    @endif
                </nav>
                <br><br><br>
            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-light rounded">
                        <div class="about-image" style='display:flex'>
                            <img style = 'height:250; width: 200; margin-bottom: 12px;'src="/images/foto-fer_home.png">
                        </div>
                        <h3>Fernanda Carrijo</h3>
                        <p align="justify">Sempre disposta a aprender e ensinar, sou uma pessoa bastante alegre, bem
                            humorada e muito honesta. Tenho bom relacionamento com os colegas com
                            quem trabalho ou já trabalhei, mesmo fora da empresa.</p>
                        <p align="justify">Tenho facilidade com programas e softwares, sou organizada do workspace aos
                            layouts, arquivos e pauta, esforçada para entregar com qualidade tudo que estiver
                            ao meu alcance e perfeccionista quando o assunto é planejamento e criação.
                            Dedicada, visto a camisa do meu time e me entrego de cabeça e coração para
                            sempre irmos mais longe.</p>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Arquivo</h4>
                        <ol class="list-unstyled2 mb-0">
                            @foreach($allBlogs as $blog)
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
