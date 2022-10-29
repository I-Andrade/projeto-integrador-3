@extends('layouts.main')





@section('title', 'Fernanda Carrijo')

@section('content')
    @php
        $detalhes = [
            [
                'titulo' => 'Café Terreiro',
                'idImagemCapa' => '1l8sY-66kIWDTrQe9wFjHoSUXTDe-jlMG',
                'categoria' => 'Identidade Visual',
                'descricao' => 'Desenvolvimento de identidade visual da marca (logotipo, papelaria, PDV), fotografia e
                 toda parte de comunicação: criação de posts (arte), publicações nas rede sociais, criação de campanhas
                  sazonais com produtos específicos para cada ação e promoções. PÚBLICO-ALVO Mulheres 70% | Homens 30%
                   Cheesecake no pote: entre 18 a 45 anos | por quilo: entre 25 a 65+ anos Residentes na cidade de Franca/SP,
                    com interesse em doces e sobremesas especiais, de média a alta renda, que “não se importam” em pagar
                     a mais por um produto de qualidade. TOM DE VOZ Linguagem coloquial, descontraído e com toques de humor.
                      OBJETIVO Crescer e consolidar a marca, alcançando reconhecimento no mercado de sobremesas especiais na
                       cidade, se tornando referência em cheesecake. Aumentar engajamento, principalmente entre a classe alta
                       , com o intuito de se tornar fornecedor de grandes restaurantes',
            ],
        ];
        $IdImagens = ['1B_1HUM4to3b0AhuylBd3RgH7x_-4WHCy', '1sdmKiRi7UUnQw4l-l5S4tga-5jQkjTFS', '1gyhhf_epuMxbOpwvqGtZzrTFMzcOxjiE', '1R8_ghCIFGOS_901czGJ_IjvWuBfc-RCd', '1jr7q0jXorPV8_HYAajSXahLiF6Rv3XFl'];

    @endphp

    <!-- Features -->
    <div id="features" class="filter">
        <br> <br> <br> <br>
        @include('layouts.navbarPort')
        <div class="container">
            @foreach ($detalhes as $detalhe)
                <div class="row">
                    <div class="col-lg-12">
                        <h2>{{ $detalhe['titulo'] }}</h2>


                    </div> <!-- end of col -->
                    <br>

                </div> <!-- end of row -->
                <div class="row">



                    <div class="row">
                        <div class="col-lg-10">

                            <br>

                            <div class="image-container">
                                <img src="https://drive.google.com/uc?export=view&id={{ $detalhe['idImagemCapa'] }}"
                                    style="width:auto; max-width: 100%; height: auto"
                                    title="Click for the larger version." />
                            </div> <!-- end of image-container -->
                        </div>

                    </div>
                    <br>

                    <div class="row">

                        <div class="col-lg-10">
                            <div class="text-container">

                                <p>{{ $detalhe['descricao'] }}</p>

                            </div> <!-- end of text-container -->
                        </div> <!-- end of col -->
                        <br>
            @endforeach


        </div> <!-- end of row -->
        <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <div class="row">
        <div class="col-lg-10">
            <br>

            <div class="image-container">
                @foreach ($IdImagens as $id)
                    <img src="https://drive.google.com/uc?export=view&id={{ $id}}"
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
