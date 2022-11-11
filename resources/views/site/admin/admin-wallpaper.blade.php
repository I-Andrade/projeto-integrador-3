@extends('layouts.mainAdmin')

@section('title', 'API - Administrativo')

@section('content')

    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Cadastro Wallpaper</h2>
                    <img class="decorative-line" src="images/decorative-line.svg" alt="decorative line">

                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">

                <div class="col-lg-12">

                    <!-- Contact Form -->
                    <form id="contactForm" data-toggle="validator" data-focus="false" action="/wallpaper/" method="POST">
                    @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" class="form-control-input" id="name" name="name" required="true">
                                <label class="label-control" for="name">Nome:</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-lg-6">
                                <label for="id_category" class="form-label">Categoria: </label>
                                <select class="form-select"  name="id_category" id="id_category" name="id_category" required="true">
                                    @foreach ($categorias as $categoria)
                                        <option value="{{$categoria->id}}" name="id_category"><?php echo ($categoria->description) ?></option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" class="form-control-input" id="author" name="author" required="true">
                                <label class="label-control" for="author">Autor:</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control-input" id="image" name="image" required="true">
                                <label class="label-control" for="image">Imagem:</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control-textarea" id="description" name="description" required="true"></textarea>
                            <label class="label-control" for="description">Descrição</label>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Salvar</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->
@endsection
