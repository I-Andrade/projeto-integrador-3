@extends('layouts.main')




   @section('title', 'Categorias')
   @include('layouts.banner')

   @section('content')


<!-- Portfólio -->
<div class="cards-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-heading">Categorias</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">
                @include('layouts.navbarPort')

                <!-- Card -->
                <div class="card">
                    <nav>
                        <a href="portifolios/identidade">
                    </nav>
                    <div class="card-image" >
                    <i class="fas fa-book"></i>
                    </div>

                    <div class="card-body">
                        <nav>
                            <a class="card-title" href="portifolios/identidade"><span style="color: black">Identidade Visual</span></a>
                        </nav>

                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                <nav>
                        <a href="portifolios/embalagem">
                    </nav>
                    <div class="card-image">
                        <i class="fas fa-coffee"></i>
                    </div>
                    <div class="card-body">
                        <a class="card-title" href="portifolios/embalagem"><span style="color: black">Embalagem</span></a>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <nav>
                        <a href="portifolios/midia">
                    </nav>
                    <div class="card-image">
                        <i class="fas fa-comment"></i>
                    </div>
                    <div class="card-body">
                        <a class="card-title" href="portifolios/midia"> <span style="color: black">Mídias Sociais</span></a>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <nav>
                        <a href="portifolios/sites">
                    </nav>
                    <div class="card-image">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="card-body">
                        <a class="card-title" href="portifolios/sites"> <span style="color: black">Sites</span></a>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <nav>
                        <a href="portifolios/campanha">
                    </nav>
                    <div class="card-image">
                        <i class="fas fa-calendar"></i>
                    </div>
                    <div class="card-body">
                        <a class="card-title" href="portifolios/campanha"> <span style="color: black">Campanhas</span></a>
                    </div>
                </div>
                <!-- end of card -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-1 -->
<!-- end of Portfólio -->
@endsection
