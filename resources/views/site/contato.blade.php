@extends('layouts.main')

@section('title', 'Fernanda Carrijo - Contato')
<!-- Preloader -->
@include('layouts.preloader')
<!-- end of preloader -->
<!-- Header -->
@include('layouts.header')

@section('content')

     <!-- Contact -->
     <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contato</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address">Teste bla bla bla mensagem</li>
                        <li><i class="fas fa-map-marker-alt"></i>Um lugar qualquer - SP</li>
                        <li><i class="fas fa-phone"></i><a class="green" href="tel:003024630820">+81 720 2212</a></li>
                        <li><i class="fas fa-envelope"></i><a class="green" href="mailto:office@argo.com">office@argo.com</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">

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
