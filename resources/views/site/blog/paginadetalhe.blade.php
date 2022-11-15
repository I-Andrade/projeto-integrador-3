@extends('layouts.mainAdmin')

<br><br><br><br><br>

@section('title', 'Fernanda Carrijo')

@section('content')

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
                    
                        <h2 class="blog-post-title">{{ $materia->title }}</h2>
                        @if($materia->image)
                            <div class="col d-none d-lg-block">
                                <img class="about-image" id="col" width="100%"
                                    src="{{$materia->image}}">
                            </div>
                        @endif
                            
                        <p class="blog-post-meta">
                            {{date('d/m/Y H:m:s', strtotime($materia->created_at))}} [{{$materia->views}} {{ $materia->views > 1 ? 'visualizações' : 'visualização'}}]
                        </p>

                        <p align="justify">
                            {!! nl2br(e($materia->text)) !!}
                        </p>

                        @if($materia->link_text)
                            <p>{{ $materia->link_text }}</p>
                            
                            @if($materia->link_url)
                                <a href="{{ $materia->link_url }}"
                                    class="stretched-link">{{ $materia->link_url }}
                                </a>
                            @endif
                        @endif
                        
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
