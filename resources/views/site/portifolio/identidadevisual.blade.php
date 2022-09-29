@extends('layouts.main')

<!-- Header -->


   @section('title', 'Identidade Visual')

   @section('content')

<!-- Projects -->
<div id="projects" class="filter">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Portifólio - Identidade Visual</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">
                @include('layouts.navbarPort')
                <div class="grid">
                    <div class="element-item embalagens">
                        <a  href="paginadetalhe"><div class="element-item-overlay"><span>Cliente 1</span></div><img src="images\portifolio\img91.jpg" alt="alternative"></a>
                    </div>
                    <div class="element-item embalagens">
                        <a href="#project-2"><div class="element-item-overlay"><span>Cliente 2</span></div><img src="images\portifolio\img31.jpg" alt="alternative"></a>
                    </div>
                    <div class="element-item identidade embalagens sites">
                        <a href="#project-3"><div class="element-item-overlay"><span>Cliente 3</span></div><img src="images\portifolio\img105.jpg" alt="alternative"></a>
                    </div>
                    <div class="element-item identidade embalagens sites">
                        <a href="#project-4"><div class="element-item-overlay"><span>Cliente 4</span></div><img src="images\portifolio\img89.jpg" alt="alternative"></a>
                    </div>
                    <div class="element-item identidade embalagens sites campanhas">
                        <a href="#project-5"><div class="element-item-overlay"><span>Cliente 5</span></div><img src="images\portifolio\img80.jpg" alt="alternative"></a>
                    </div>
                    <div class="element-item sites campanhas identidade">
                        <a href="#project-6"><div class="element-item-overlay"><span>Cliente 6</span></div><img src="images\portifolio\img52.jpg" alt="alternative"></a>
                    </div>
                    <div class="element-item identidade embalagens">
                        <a href="#project-7"><div class="element-item-overlay"><span>Cliente 7</span></div><img src="images\portifolio\img97.jpg" alt="alternative"></a>
                    </div>
                    <div class="element-item identidade embalagens">
                        <a href="#project-8"><div class="element-item-overlay"><span>Cliente 8</span></div><img src="images\portifolio\img54.jpg" alt="alternative"></a>
                    </div>
                </div> <!-- end of grid -->
                <!-- end of filter -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of filter -->
<!-- end of projects -->
@endsection
