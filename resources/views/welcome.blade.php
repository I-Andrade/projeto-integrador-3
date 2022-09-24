      @extends('layouts.main')
   <!-- Preloader -->
@include('layouts.preloader')
<!-- end of preloader -->
<!-- Header -->
@include('layouts.header')

      @section('title', 'Fernanda Carrijo')

      @section('content')

          <div id="about" class="form-1">
              <div class="container">
                  <div class="row">
                      <div class="text-container">
                          <div id="about" class="form-1">
                              <div class="about-image">
                                  <img src="images\Designer.png">
                              </div>
                          </div>
                          <h2>Fernanda</h2>
                          <h3>Moreira Carrijo Andrade</h3>
                          <p>Sempre disposta a aprender e ensinar, sou uma pessoa bastante alegre, bem
                              humorada e muito honesta. Tenho bom relacionamento com os colegas com
                              quem trabalho ou já trabalhei, mesmo fora da empresa.</p>
                          <p>Tenho facilidade com programas e softwares, sou organizada do workspace aos
                              layouts, arquivos e pauta, esforçada para entregar com qualidade tudo que estiver
                              ao meu alcance e perfeccionista quando o assunto é planejamento e criação.
                              Dedicada, visto a camisa do meu time e me entrego de cabeça e coração para
                              sempre irmos mais longe.</p>
                          <ul class="list-unstyled li-space-lg">
                              <li class="media">
                                  <i class="fas fa-square"></i>
                                  <div class="media-body"><strong>Adobe Photoshop
                                          AVANÇADO</div>
                              </li>
                              <li class="media">
                                  <i class="fas fa-square"></i>
                                  <div class="media-body"><strong>Adobe Illustrator
                                          AVANÇADO</div>
                              </li>
                              <li class="media">
                                  <i class="fas fa-square"></i>
                                  <div class="media-body"><strong>Adobe Indesign
                                          AVANÇADO</div>
                              </li>
                          </ul>

                      </div> <!-- end of text-container-->

                  </div> <!-- end of row -->

              </div> <!-- end of container -->


              @include('layouts.carrossel')
          </div> <!-- end of form-1 -->




      @endsection
