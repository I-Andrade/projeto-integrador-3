<body data-spy="scroll" data-target=".fixed-top">

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col">
                        <h4>Fernanda Carrijo</h4>
                        @php
                            $origin = date_create('2013-06-01');
                            $target = date_create(date('Y-m-d'));
                            $interval = date_diff($origin, $target);
                            $anos = $interval->format('%y');
                          @endphp
                        <div class='media-body'>Sou designer gráfico, trabalho na área há {{$anos}} anos e amo os desafios que minha profissão me traz.</div>
                    </div> <!-- end of footer-col -->
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col">
                        <h4>Contato para Orçamentos</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">E-mail para orçamentos <a class="green" href="feer.carrijoo@gmail.com">feer.carrijoo@gmail.com</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">WhatsApp para mais <br> informações <a class="green" href="(16)992780943">(16) 992780943</a></div>
                            </li>
                        </ul>
                    </div> <!-- end of footer-col -->
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col">
                        <h4>Redes Sociais</h4>
                        <span class="fa-stack">
                            <a target="_blank" href="https://www.instagram.com/fcarrijo.design/">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a target="_blank" href="https://www.linkedin.com/in/fernandamcarrijo/">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of footer-col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright ©{{date('Y')}} Turma 12 Polo Franca-SP - PI3 Univesp</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->
