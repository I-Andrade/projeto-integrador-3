<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">

    <!-- Image Logo -->
    <a class="navbar-brand logo-image" href="/"><img src="\images\logo-designer.jpeg" alt="alternative"></a>

    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-awesome fas fa-bars"></span>
        <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link page-scroll" href="/">Home <span class="sr-only">(current)</span></a>
            </li>

            <!-- Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle page-scroll" href="/portifolios" id="navbarDropdown" role="button"
                    aria-haspopup="true" aria-expanded="false">Portifólio</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/portifolios/identidade"><span class="item-text">Identidade Visual</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="/portifolios/embalagem"><span class="item-text">Embalagem</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="/portifolios/midia"><span class="item-text">Mídias Sociais</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="/portifolios/sites"><span class="item-text">Sites</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="/portifolios/campanha"><span class="item-text">Campanhas</span></a>

                </div>
            </li>
            <!-- end of dropdown menu -->

            <li class="nav-item">
                <a class="nav-link page-scroll" href="/contato">Contato</a>
            </li>

            <!-- Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle page-scroll" href="/blogs" id="navbarDropdown" role="button"
                    aria-haspopup="true" aria-expanded="false">Blog</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/blogs"><span class="item-text">Design</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="/blogs"><span class="item-text">Mercado</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="/blogs"><span class="item-text">Curiosidades</span></a>


                </div>
            </li>
            @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="/admin" id="navbarDropdown" role="button"
                        aria-haspopup="true" aria-expanded="false">Admin</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/login"><span class="item-text">Login</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="/admin-blog"><span class="item-text">Admin Blog</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="/admin-cadCategoria"><span class="item-text">Cadastra Nova Categoria - Blog</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="/admin-portfolio"><span class="item-text">Admin Portifólio</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="/admin-api"><span class="item-text">Admin API</span></a>
                    </div>
                </li>
            @endauth

            <!-- end of dropdown menu -->
        </ul>
        <span class="nav-item social-icons">
            <span class="fa-stack">
                <a target="_blank" href="https://www.instagram.com/fcarrijo.design/">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-instagram fa-stack-1x"></i>
                </a>
            </span>
            <span class="fa-stack">
                <a target="_blank"  href="https://www.linkedin.com/in/fernandamcarrijo/">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-linkedin-in fa-stack-1x"></i>
                </a>
            </span>
        </span>
        @auth
            <span class="nav-item social-icons">

                {{ strtoupper(Auth::user()->name) }}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit">
                        Sair
                    </button>
                </form>
            </span>
        @endauth
    </div>
</nav>
<!-- end of navbar -->
<!-- end of navigation -->
