@extends('layouts.main')




   @section('title', 'Categorias')

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
                    <div class="card-image">
                        <i class="fas fa-code"></i>
                    </div>

                    <div class="card-body">
                        <nav>
                            <a class="card-title" href="portIdentidadeVisual"><span style="color: black">Identidade Visual</span></a>
                        </nav>

                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="card-body">
                        <a class="card-title" href="portEmbalagens"><span style="color: black">Embalagem</span></a>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="card-body">
                        <a class="card-title" href="portMidias"> <span style="color: black">Mídias Sociais</span></a>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="card-body">
                        <a class="card-title" href="portSites"> <span style="color: black">Sites</span></a>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="card-body">
                        <a class="card-title" href="portCampanhas"> <span style="color: black">Campanhas</span></a>
                    </div>
                </div>
                <!-- end of card -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-1 -->
<!-- end of Portfólio -->
@endsection
