@extends('layouts.main')





@section('title', 'Fernanda Carrijo')

@section('content')
    <!-- Features -->
    <div id="features" class="tabs">
        <div class="container">
            <div class="row">

            </div> <!-- end of row -->
            <div class="row">


            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of tabs -->
    <!-- end of features -->

    <!-- Detalhe -->
    <div class="basic-3">
        <div class="container">
            @include('layouts.navbarPort')
            <div class="row">

                <div class="col-lg-5">
                    <div class="text-container">
                        <h2>GREKO
                            CHEESECAKE</h2>
                        <p>Desenvolvimento de identidade visual da marca (logotipo, papelaria,
                            PDV), fotografia e toda parte de comunicação: criação de posts (arte),
                            publicações nas rede sociais, criação de campanhas sazonais com
                            produtos específicos para cada ação e promoções.
                            PÚBLICO-ALVO
                            Mulheres 70% | Homens 30%
                            Cheesecake no pote: entre 18 a 45 anos | por quilo: entre 25 a 65+ anos
                            Residentes na cidade de Franca/SP, com interesse em doces e sobremesas
                            especiais, de média a alta renda, que “não se importam” em pagar a mais
                            por um produto de qualidade.
                            TOM DE VOZ
                            Linguagem coloquial, descontraído e com toques de humor.
                            OBJETIVO
                            Crescer e consolidar a marca, alcançando reconhecimento no mercado de
                            sobremesas especiais na cidade, se tornando referência em cheesecake.
                            Aumentar engajamento, principalmente entre a classe alta, com o intuito
                            de se tornar fornecedor de grandes restaurantes</p>

                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <br> <br>
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-2.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of detalhe -->
@endsection
