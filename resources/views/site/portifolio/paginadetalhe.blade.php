@extends('layouts.main')





@section('title', 'Fernanda Carrijo')

@section('content')

    <!-- Features -->
    <div id="features" class="filter">
        <br> <br> <br> <br>
        @include('layouts.navbarPort')
        <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>{{ $portifolio->title }}</h2>


                    </div> <!-- end of col -->
                    <br>

                </div> <!-- end of row -->
                <div class="row">



                    <div class="row">
                        <div class="col-lg-10">

                            <br>

                            <div class="image-container">
                                <img src="<?php echo($portifolio->image) ?>"
                                    style="width:auto; max-width: 100%; height: auto"
                                    title="Click for the larger version." />
                            </div> <!-- end of image-container -->
                        </div>

                    </div>
                    <br>

                    <div class="row">

                        <div class="col-lg-10">
                            <div class="text-container">

                                <p>{{ $portifolio->description }}</p>

                            </div> <!-- end of text-container -->
                        </div> <!-- end of col -->
                        <br>


        </div> <!-- end of row -->
        <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <div class="row">
        <div class="col-lg-10">
            <br>

            <div class="image-container">
                @foreach ($imagens as $imagem)
                    <img src="<?php echo($imagem->image) ?>"
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
