@extends('layouts.main')

@include('layouts.preloader')

@section('title', 'Fernanda Carrijo')

@section('content')

    @php
        $origin = date_create('2013-06-01');
        $target = date_create(date('Y-m-d'));
        $interval = date_diff($origin, $target);
        $anos = $interval->format('%y');
    @endphp

    <div id="about" class="form-1">
        <div class="container">
            <div class="row">
                <div class="text-container">
                    
                    <div id="about" class="form-1">
                        <div class="about-image">
                            <img src="/images/foto-fer_home.png">
                        </div>
                    </div>

                    <h2>Olá!</h2>
                    <h3>Eu sou a Fernanda</h3>                      
                    <p align="justify">Sou designer gráfico, trabalho na área há {{$anos}} anos e amo os desafios que minha profissão me traz. Gosto de pular de cabeça e me sentir parte de cada detalhe em cada projeto para que eu possa encontrar o problema, enxergar as necessidades, trilhar o caminho, desenhar a solução e apreciar os resultados.</p>
                    <p align="justify">Me realizo em saber que posso trazer à vida os mais diversos sonhos, seja na área de negócios em uma identidade visual, papelaria, em fotografias de produtos, divulgação no on e offline, seja em materiais para eventos como convites de casamento, aniversários, menu e etc.</p>
                </div>
            </div> 
        </div> 
    </div>
    @include('layouts.carrossel')
@endsection
