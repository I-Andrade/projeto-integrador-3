@extends('layouts.main')

@section('title', 'Blog - Administrativo')

@section('content')

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
                    <form id="contactForm" data-toggle="validator" data-focus="false">
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" class="form-control-input" id="cname" required="">
                                <label class="label-control" for="cname">Titulo</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-lg-4"><input type="tex" class="form-control-input" id="cBigImagem"
                                required="">
                                <label class="label-control" for="cemail"> Nome Imagem:</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-lg-4"><input type="tex" class="form-control-input" id="cBigImagem"
                                required="">
                                <label class="label-control" for="cemail"> Link imagem:</label>
                                <div class="help-block with-errors"></div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" class="form-control-input" id="cdata" required="">
                                <label class="label-control" for="cname">Texto Anterior ao Link</label>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="col-lg-4">
                                <input type="text" class="form-control-input" id="clink" required="">
                                <label class="label-control" for="clink">Link</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-lg-4">
                                <label for="country" class="form-label">Categoria: </label>
                                <select class="form-select" id="categoria" required="">
                                    <option value="">Design</option>
                                    <option value="">Mercado</option>
                                    <option value="">Curiosidades</option>
                                    <option value="">Nova Categoria</option>
                                </select>
                            </div>


                        </div>


                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required=""></textarea>
                            <label class="label-control" for="cmessage">Descrição</label>
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
