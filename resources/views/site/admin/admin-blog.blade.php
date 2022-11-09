@extends('layouts.mainAdmin')

@section('title', 'Blog - Administrativo')

@section('content')

<link rel="stylesheet" href="css/blog.css">

    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Nova Postagem - Blog</h2>
                    <img class="decorative-line" src="images/decorative-line.svg" alt="decorative line">

                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">

                <div class="col-lg-12">

                    <!-- Contact Form -->
                    <form action= /blog/ method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" class="form-control-input" name="title" id="title">
                                <label class="label-control" for="title">Titulo</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control-input" name="image_name" id="image_name">
                                <label class="label-control" for="image_name"> Nome Imagem:</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-lg-4">
                                <input type="tex" class="form-control-input" name="image" id="image">
                                <label class="label-control" for="image"> Link imagem:</label>
                                <div class="help-block with-errors"></div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" class="form-control-input" name="link_text" id="link_text">
                                <label class="label-control" for="link_text">Texto Anterior ao Link</label>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="col-lg-4">
                                <input type="text" class="form-control-input" name="link_url" id="link_url">
                                <label class="label-control" for="link_url">Link</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-lg-4">
                                <label for="id_category" class="form-label">Categoria: </label>
                                <select class="form-select"  name="id_category" id="id_category">
                                    @foreach ($categorias as $categoria)
                                        <option value="<?php echo($categoria->id)?>" name="id_category"><?php echo ($categoria->description) ?></option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="form-group">
                            <textarea class="form-control-textarea" name="text" id="text"></textarea>
                            <label class="label-control" for="text">Descrição</label>
                            <div class="help-block with-errors"></div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Salvar</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>

                    </form>
                    <!-- end of blog form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->



    <script src="\js\blog.js"></script>


@endsection
