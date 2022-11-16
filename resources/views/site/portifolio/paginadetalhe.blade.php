@extends('layouts.mainAdmin')




@section('title', 'Fernanda Carrijo - Portfólio')

@section('content')

    <!-- Features -->
    <div id="features" class="filter">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Portfólio</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">
                @include('layouts.navbarPort')
            </div>
        </div>
        <br> <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>
                        {{ $portifolio->title }}
                    </h2>
                </div> <!-- end of col -->
                <br>
            </div> <!-- end of row -->

            <div class="row">   

                {{-- <div class="row"> --}}
                    <div class="col-lg-12">
                        <br>
                        <div class="image-container">
                            <img src="{{$portifolio->image}}"
                                style="width:auto; max-width: 100%; height: auto"
                                title="Click for the larger version." />
                        </div> <!-- end of image-container -->
                    </div>
                {{-- </div> --}}

                <br>

                {{-- <div class="row"> --}}
                    <div class="col-lg-12">
                        <div class="text-container">
                            <p>{!! nl2br(e($portifolio->description)) !!}</p>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <br>
                {{-- </div> <!-- end of row --> --}}

            </div> <!-- end of basic-3 -->
            
            <div class="row">
                <div class="col-lg-12">
                    
                    <br>

                    <div class="image-container">
                        @foreach ($imagens as $imagem)
                            <img src="{{$imagem->image}}"
                                style="width: auto; max-width: 100%; height: auto" title="Click for the larger version." />
                        @endforeach
                    </div> <!-- end of image-container -->

                </div>
            </div>

        </div> <!-- end of container -->
    </div> <!-- end of tabs -->
    <!-- end of features -->

    <!-- Detalhe -->

    <!-- end of detalhe -->
@endsection
