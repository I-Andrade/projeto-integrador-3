@extends('layouts.main')

@section('title', 'Blog - Administrativo')

@section('content')
    <link rel="stylesheet" href="css/blog.css">

    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Cadastra Nova Categoria - Blog</h2>
                    <img class="decorative-line" src="images/decorative-line.svg" alt="decorative line">
                    <form class="form-group">

                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" class="form-control-input" id="cadCategoria">
                                <label class="label-control" for="cadCategoria">Nova Categoria</label>
                            </div>
                            <div class="col-lg-12">
                                <input type="text" class="form-control-input" id="tipoCategoria">
                                <label class="label-control" for="cadCategoria">Tipo (Blog ou Wallpaper)</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button type="button" class="form-control-submit-button">Salvar</button>
                        </div>


                    </form>
                </div> <!-- end of col -->
            </div> <!-- end of row -->

        </div> <!-- end of row -->
    </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->




@endsection
