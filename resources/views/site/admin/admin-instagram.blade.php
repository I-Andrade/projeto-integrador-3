@extends('layouts.mainAdmin')

@section('title', 'Instagram - Administrativo')

@section('content')
    <link rel="stylesheet" href="css/blog.css">

    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Tokens Instagram</h2>
                    <img class="decorative-line" src="images/decorative-line.svg" alt="decorative line">
                    <form class="form-group" action=/insta-new-code>
                        <div class="col-lg-12">
                            <h3>Tokens de curta duração</h3>
                                <button type="submit" class="form-control-submit-button">Gerar</button>
                        </div>
                        <div class="col-lg-12">
                            ----------
                        </div>
                    </form>
                </div> <!-- end of col -->
            </div> <!-- end of row -->

        </div> <!-- end of row -->
    </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->




@endsection
