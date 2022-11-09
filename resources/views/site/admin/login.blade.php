@extends('layouts.mainAdmin')

@section('title', 'Login')

@section('content')
    <link rel="stylesheet" href="css/blog.css">

    <div id="contact" class="form-2">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div>

                        <h2>Loggin - Administrativo</h2>
                        <a class="navbar-brand logo-image">
                            <img src="\images\logo-designer.jpeg" style="border-radius: 100%;" alt="alternative">
                        </a>

                        <img class="decorative-line" src="images/decorative-line.svg" alt="decorative line">
                    </div>


                    <div class="col-lg-8">
                        <form class="form-group" method="POST" action="{{ route('login') }}">
                            @csrf


                            <!-- Email Address -->
                            <div class="form-floating">
                                <input id="email" class="form-control" type="email" name="email"
                                    value="{{ old('email') }}" required autofocus placeholder="nome@examplo.com.br">
                                <label for="floatingInput">E-mail</label>
                            </div>

                            <!-- Password -->
                            <div class="form-floating">
                                <input id="password" class="form-control" type="password" name="password"
                                    placeholder="senha" required>
                                <label for="floatingPassword">Senha</label>
                            </div>

                            <!-- Remember Me -->
                            <div class="checkbox mb-3">
                                <label for="remember_me">
                                    <input id="remember_me" type="checkbox" value="remember-me" name="remember"> Manter
                                    logado
                                </label>
                            </div>

                            <div class="form-floating">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </div>

                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">Avançar</button>
                            </div>
                        </form>
                    </div>

                </div>






            </div>

        </div>





    </div>

    </div>

@endsection
