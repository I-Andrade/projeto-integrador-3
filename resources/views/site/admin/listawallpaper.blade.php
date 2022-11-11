@extends('layouts.mainAdmin')

@section('title', 'Wallpaper - Listagem')

@section('content')


<!-- Portfólio -->
<div class="cards-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-heading">Wallpaper - Listagem</h2>
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
                                <th>Nome</th>
                                <th>Data Postagem</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            @foreach ($wallpapers as $wallpaper)
                                <tr>
                                    <td>{{$wallpaper->id}}</td>
                                    <td>{{strtoupper($wallpaper->categoria->description)}}</td>
                                    <td><strong>{{$wallpaper->name}}<strong></td>
                                    <td>{{date('d/m/Y H:m:s', strtotime($wallpaper->created_at))}}</td>
                                    <td>
                                        <form method="POST" action="/wallpaper/{{$wallpaper->id}}">
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
                    Total de {{$wallpapers->count()}} Wallpapers publicados.

                </div>

                <br><br><br><br><br>


            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-1 -->
<!-- end of Portfólio -->
@endsection
