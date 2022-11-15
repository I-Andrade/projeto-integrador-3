@extends('layouts.mainAdmin')

@section('title', 'Portfólio - Trabalhos')

@section('content')


<!-- Portfólio -->
<div class="cards-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-heading">Portfólio - Trabalhos</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">


                <!-- Card -->
                <div class="col-lg-10">

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Categoria</th>
                                <th>Titulo Trabalho</th>
                                <th>Data Postagem</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            @foreach ($portifolios as $portifolio)
                                <tr>
                                    <td>{{$portifolio->id}}</td>
                                    <td>{{strtoupper($portifolio->category)}}</td>
                                    <td><strong>{{$portifolio->title}}<strong></td>
                                    <td>{{date('d/m/Y H:m:s', strtotime($portifolio->created_at))}}</td>
                                    <td>
                                        <form method="POST" action="/portifolio/{{$portifolio->id}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">
                                                Deletar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- end of card -->
                <div class="row">
                    Total de {{$portifolios->count()}} trabalhos postados.

                </div>

                <br><br><br><br><br>


            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-1 -->
<!-- end of Portfólio -->
@endsection
