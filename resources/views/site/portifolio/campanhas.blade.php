@extends('layouts.main')

<!-- Header -->


   @section('title', 'Campanhas')

   @section('content')
<!-- Projects -->
<div id="projects" class="filter">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Portifólio - Campanhas</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">
                @include('layouts.navbarPort')
                <div class="grid">
                    @foreach($portifolios as $portifolio)
                    <div class="element-item embalagens">
                        <a  href="paginadetalhe"><div class="element-item-overlay"><span>{{$portifolio->title}}</span></div><img src="<?php echo($portifolio->image) ?>" alt="alternative"></a>
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
