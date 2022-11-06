@extends('layouts.main')




   @section('title', 'Categorias')

   @section('content')


<!-- Portfólio -->
<div class="cards-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-heading">Postagens Blog</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">


                <!-- Card -->
                <div class="col-lg-10">

                    <table  class="table">
                        <thead>
                            <tr>
                                <th>ID Postagem</td>
                                <th>Titulo Postagem</td>
                                <th>Data Postagem</td>
                                <th colspan="2">Ações</td>
                            </tr>
                        </thead>
                        <tbody id="tbody">

                        </tbody>

                    </table>

                </div>

                <!-- end of card -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-1 -->
<!-- end of Portfólio -->
@endsection
