@extends('layouts.main')

<!-- Header -->


   @section('title', 'Embalagens')

   @section('content')
   @php
   $embalagens = [[ 'titulo' => 'La Reina',
                'idImagem' => '1h_ujsOTzYmLqTEMw6F5PY2COi7Y5fHHZ'],
                ['titulo' => 'Farm 2 Farm',
                'idImagem' => '17uaG1XNpym90-TPMoMVNOG3gx08pb0HB']
];
   @endphp
<!-- Projects -->
<div id="projects" class="filter">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Portifólio  - Embalagens</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">
                @include('layouts.navbarPort')
                <div class="grid">
                    @foreach($embalagens as $embalagem)
                    <div class="element-item embalagens">
                        <a  href="paginadetalhe"><div class="element-item-overlay"><span>{{$embalagem['titulo']}}</span></div><img src="https://drive.google.com/uc?export=view&id={{$embalagem['idImagem']}}" alt="alternative"></a>
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

