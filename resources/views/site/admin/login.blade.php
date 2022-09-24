@extends('layouts.main')

@section('title', 'Login')

@section('content')
    <div id="contact" class="form-2">
        <div class="container">
            <div class="col-lg-6">
                <img class="mb-4" src="images/logo.svg" alt="" width="100" height="100">

                <div class="form-floating">

                    <input type="email" class="form-control" id="floatingInput" placeholder="nome@examplo.com.br">
                    <label for="floatingInput">E-mail</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="senha">
                    <label for="floatingPassword">Senha</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Esqueci a senha / Primeiro Acesso
                    </label>
                </div>
                <div class="form-group">
                <button type="submit" class="form-control-submit-button">Avançar</button>
            </div>
                <div class="copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="p-small">Copyright © 2022 Turma 12 Polo Franca-SP - PI3 Univesp</p>
                            </div> <!-- end of col -->
                        </div> <!-- enf of row -->
                    </div> <!-- end of container -->
                </div> <!-- end of copyright -->
            </div>
        </div>
    </div>

    @endsection
