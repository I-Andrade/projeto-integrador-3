@extends('layouts.main')

@section('title', 'Login')

@section('content')

    <div id="contact" class="form-2">

        <div class="container">

            <div class="row">
                <div class="col-lg-1">

                    <img class="navbar-brand logo-image" src="\images\logo-designer.jpeg" alt="alternative" width="100" height="100">

                </div>
            </div>
            <div class="row">
                


                       
                
                
                
                
                
                
                
                
                <div class="col-lg-6">
                    <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="form-floating">
                        <input id="email" class="form-control" type="email" name="email" value="{{old('email')}}" required autofocus placeholder="nome@examplo.com.br">
                        <label for="floatingInput">E-mail</label>
                    </div>

                    <!-- Password -->
                    <div class="form-floating">
                        <input id="password" class="form-control" type="password" name="password" placeholder="senha" required>
                        <label for="floatingPassword">Senha</label>
                    </div>

                    <!-- Remember Me -->
                     <div class="checkbox mb-3">
                        <label for="remember_me">
                            <input id="remember_me" type="checkbox" value="remember-me" name="remember"> Manter logado
                        </label>
                    </div>

                    <div class="form-floating">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="form-control-submit-button">Avançar</button>
                    </div>

                     </form>
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
