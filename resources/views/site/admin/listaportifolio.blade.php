@extends('layouts.main')




   @section('title', 'Categorias')

   @section('content')


<!-- Portfólio -->
<div class="cards-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-heading">Postagens Portifólio</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">


                <!-- Card -->
                <div class="col-lg-10">

                    <table  class="table">
                        <thead>
                            <tr>
                                <th>ID Postagem</th>
                                <th>Titulo Postagem</th>
                                <th>Data Postagem</th>
                                <th colspan="2">Ações</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            <tr>
                                <td>01</td>
                                <td>Natal Feliz</td>
                                <td>12/12/2022</td>
                                <td>Desabilita</td>
                                <td>Deleta</td>
                            </tr>

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
