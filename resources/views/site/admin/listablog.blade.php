@extends('layouts.mainAdmin')


@section('title', 'Blog - Postagens')

@section('content')


<!-- Portfólio -->
<div class="cards-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-heading">Blog - Postagens</h2>
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
                                <th>Titulo</th>
                                <th>Data Postagem</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            @foreach ($blogs as $blog)
                                <tr>
                                    <td>{{$blog->id}}</td>
                                    <td>{{strtoupper($blog->categoria->description)}}</td>
                                    <td><strong>{{$blog->title}}<strong></td>
                                    <td>{{date('d/m/Y H:m:s', strtotime($blog->created_at))}}</td>
                                    <td>
                                        <form method="POST" action="/blog/{{$blog->id}}">
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
                    Total de {{$blogs->count()}} matérias postadas.

                </div>

                <br><br><br><br><br>


            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-1 -->
<!-- end of Portfólio -->
@endsection
