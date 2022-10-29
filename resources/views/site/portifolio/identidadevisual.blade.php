@extends('layouts.main')

<!-- Header -->


   @section('title', 'Identidade Visual')

   @section('content')
   @php
   $identidades = [[ 'titulo' => 'Café Terreiro',
                'idImagem' => '1l8sY-66kIWDTrQe9wFjHoSUXTDe-jlMG'],
                ['titulo' => 'Café Terreiro2',
                'idImagem' => '1jr7q0jXorPV8_HYAajSXahLiF6Rv3XFl']
            ];
   @endphp

<!-- Projects -->
<div id="projects" class="filter">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Portifólio - Identidade Visual</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">
                @include('layouts.navbarPort')
                <div class="grid">
                    @foreach($identidades as $identidade)
                    <div class="element-item embalagens">
                        <a  href="paginadetalhe"><div class="element-item-overlay"><span>{{$identidade['titulo']}}</span></div><img src="https://drive.google.com/uc?export=view&id={{$identidade['idImagem']}}" alt="alternative"></a>
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
