<?php
    if ($categoria == 'sites') {
        $titulo = 'Sites';
    } else if ($categoria == 'identidade') {
        $titulo = 'Identidade Visual';
    } else if ($categoria == 'embalagem') {
        $titulo = 'Embalagens';
    } else if ($categoria == 'midia') {
        $titulo = 'Mídias Sociais';
    } else if ($categoria == 'campanha') {
        $titulo = 'Campanhas';
    }
?>

@extends('layouts.mainAdmin')

<!-- Header -->


@section('title', 'Fernanda Carrijo - Portfólio')

@section('content')

<!-- Projects -->
<div id="projects" class="filter">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Portfólio - {{$titulo}}</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">
                @include('layouts.navbarPort')
                <div class="grid">
                    @foreach($portifolios as $portifolio)
                        <div class="element-item embalagens">
                            <a  href="/portifolio/{{$portifolio->id}}">
                                <div class="element-item-overlay">
                                    <span>
                                        {{$portifolio->title}}
                                    </span>
                                </div>
                                <img src="{{$portifolio->imagemCapa}}" alt="{{$portifolio->title}}">
                            </a>
                        </div>
                    @endforeach
                </div> <!-- end of grid -->
                <!-- end of filter -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of filter -->
<!-- end of projects -->
@endsection
