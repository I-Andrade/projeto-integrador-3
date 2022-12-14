@extends('layouts.mainAdmin')

@section('title', 'Portfólio - Administrativo')

@section('content')

    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Novo Portfólio</h2>
                    <img class="decorative-line" src="images/decorative-line.svg" alt="decorative line">

                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">

                <div class="col-lg-12">

                    <!-- Contact Form -->
                    <form id="contactForm" data-toggle="validator" data-focus="false" action="/portifolio" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" class="form-control-input" id="cname" name="title" >
                                <label class="label-control" for="cname">Titulo</label>
                                <div class="help-block with-errors"></div>
                            </div>


                            <div class="col-lg-4">
                                <label for="country" class="form-label">Categoria: </label>
                                <select class="form-select" id="categoria" name="category" required>
                                    <option value="identidade">Identidade Visual</option>
                                    <option value="embalagem">Embalagens</option>
                                    <option value="sites">Sites</option>
                                    <option value="campanha">Campanhas</option>
                                    <option value="midia">Midias Sociais</option>
                                </select>



                            </div>

                        </div>
                        <div class="row">

                            <div class="col-lg-4">
                                <input type="tex" class="form-control-input" name="image" id="cBigImagem">
                                <label class="label-control" for="cBigImagem">ID Imagem Capa</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control-input"id="descImagens">
                                <label class="label-control" for="descImagens">IDs outras Imagens</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="row">
                                <button type="button" id="btn1"  onclick="idImagem.salvar()">Adicionar</button>
                                <button type="button"  onclick="idImagem.cancelar()">Cancelar</button>
                            </div>

                        </div>

                        <div class="table">

                            <div class="col-lg-10">

                                <table  class="table">
                                    <thead>
                                        <tr>
                                            <th>Item</td>
                                            <th>Ids das Imagens</td>
                                            <th colspan="2">Ações</td>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">

                                    </tbody>

                                </table>

                            </div>


                        </div>

                        <div hidden id='inputsImages'>

                        </div>

                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" name="description" required></textarea>
                            <label class="label-control" for="cmessage">Descrição do Trabalho</label>
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

    <script src="\js\portifolio.js"></script>
@endsection
