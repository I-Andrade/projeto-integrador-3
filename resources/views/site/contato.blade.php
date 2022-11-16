@extends('layouts.mainAdmin')

@section('title', 'Fernanda Carrijo - Contato')
<!-- Preloader -->
<!-- end of preloader -->
<!-- Header -->
@include('layouts.header')

<br><br><br><br><br>

@section('content')

     <!-- Contact -->
     <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contato</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li><i class="fas fa-map-marker-alt"></i>Franca - SP</li>
                        <li><i class="fas fa-phone"></i><a class="green" href="tel:16992780943">(16) 992780943</a></li>
                        <li><i class="fas fa-envelope"></i><a class="green" href="mailto:feer.carrijoo@gmail.com">feer.carrijoo@gmail.com</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">

                    <div class="col-lg-5">
                    <div class="text-container">
                        <h3>Vamos conversar!</h3>
                        <p>Está com dúvidas ou quer fazer solicitações?</p>
                        <p>Mande uma mensagem <strong style="color:#E45032">;)</strong></p>


                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->


                <div class="col-lg-6">

                    <!-- Contact Form -->
                    <form id="formulario">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="nomeid2" name="nome" required="required">
                            <label class="label-control" for="nome">Nome</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="telefoneid2" name="telefone" required="required">
                            <label class="label-control" for="telefone">Telefone</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="mensagemid2" name="mensagem" required="required"></textarea>
                            <label class="label-control" for="mensagem">Sua mensagem</label>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="form-control-submit-button" onclick="Enviar2();" value="ENVIAR WHATSAPP">
                        </div>

                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->
@endsection
