@extends('layouts.main')

@section('title', 'API - Administrativo')

@section('content')

    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Cadastro API</h2>
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
                                <label class="label-control" for="cname">Nome:</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control-input" id="ccategoria" required="">
                                <label class="label-control" for="ccategoria">Categoria:</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control-input" id="cdimensoes" required="">
                                <label class="label-control" for="cdimensoes">Dimensões:</label>
                                <div class="help-block with-errors"></div>
                            </div>



                        </div>
                        <div class="row">
                            <div class="col-lg-6"><input type="tex" class="form-control-input" id="cBigImagem"
                                    required="">
                                <label class="label-control" for="cemail">WallPaper</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-lg-6"> <input type="file" class="form-control-input" id="cBigImagem"
                                    required=""></div>

                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" class="form-control-input" id="cSmallImagem" required="">
                                <label class="label-control" for="cemail">Imagem Menor</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-lg-6">
                                <input type="file" class="form-control-input" id="cSmallImagem" required="">


                            </div>

                        </div>


                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required=""></textarea>
                            <label class="label-control" for="cmessage">Descrição do WallPaper</label>
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
