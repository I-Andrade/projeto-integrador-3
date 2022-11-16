@extends('layouts.mainAdmin')

@section('title', 'Categoria - Administrativo')

@section('content')

    <link rel="stylesheet" href="css/blog.css">

    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container" style="width: 40%">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Categorias</h2>
                    <img class="decorative-line" src="images/decorative-line.svg" alt="decorative line">
                    
                    <form class="form-group" method="POST" action="/categoria">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <h3>Nova categoria</h3>
                                <div>
                                    <label>
                                        Blog
                                        <input id="ant" name="type" type="radio" value=1 required />
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        Wallpaper
                                        <input id="grade" name="type" type="radio" value=2 required />
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <input type="text" class="form-control-input" id="cadCategoria" name="description"
                                    required>
                                <label class="label-control" for="cadCategoria">Nova Categoria</label>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <button type="submit" class="form-control-submit-button">Salvar</button>
                        </div>


                    </form>
                </div> <!-- end of col -->
            </div> <!-- end of row -->

        </div> <!-- end of row -->

        <!-- Portfólio -->
        <div id="contact" class="form-2">
            <div class="container">


                <div class="row">
                    
                    <div class="col-lg-12">

                        <!-- Card -->

                        <h2 class="h2-heading">Blog</h2>
                        <table class="table">
                            <thead>

                                <th>ID</th>
                                <th>Categoria</th>
                                <th>Ações</th>

                            </thead>
                            <tbody id="tbody">
                                @foreach ($catBlog as $cat)
                                    <tr>
                                        <td>{{ $cat->id }}</td>
                                        <td>{{ strtoupper($cat->description) }}</td>
                                        <td>
                                            <form method="POST" action="/categoria/{{ $cat->id }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" {{ $cat->semRegistros ? '' : 'disabled' }}>
                                                    Deletar{{ $cat->semRegistros ? '' : '*' }}
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                        <!-- end of card -->
                        <div>
                            Total de {{ $catBlog->count() }} categorias de Blogs cadastradas.
                            <br>
                            * Exclusão não possível, pois há registros vinculados à categoria.
                        </div>

                            <br>
                            <br>
                            <br>

                        <!-- Card -->

                        <h2 class="h2-heading">Wallpaper</h2>
                        <table class="table">
                            <thead>

                                    <th>ID</th>
                                    <th>Categoria</th>
                                    <th>Ações</th>

                            </thead>
                            <tbody id="tbody">
                                @foreach ($catWallpaper as $cat)
                                    <tr>
                                        <td>{{ $cat->id }}</td>
                                        <td>{{ strtoupper($cat->description) }}</td>
                                        <td>
                                            <form method="POST" action="/categoria/{{ $cat->id }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" {{ $cat->semRegistros ? '' : 'disabled' }}>
                                                    Deletar{{ $cat->semRegistros ? '' : '*' }}
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                        <!-- end of card -->
                        <div>
                            Total de {{ $catWallpaper->count() }} categorias de Wallpapers cadastradas.
                            <br>
                            * Exclusão não possível, pois há registros vinculados à categoria.
                        </div>
                    </div> <!-- end of col -->
                    <!-- end of row -->
                </div>
            </div> <!-- end of container -->
        </div> <!-- end of form-2 -->
        <!-- end of contact -->
    </div>
    @endsection
