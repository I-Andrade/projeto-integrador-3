@extends('layouts.mainAdmin')




@section('title', 'Fernanda Carrijo - Portfólio')

@section('content')


<!-- Portfólio -->
<div class="cards-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-heading">Portfólio - Categorias</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">
                {{-- @include('layouts.navbarPort') --}}

                <!-- Card -->
                <div class="card">
                    <nav>
                        <a href="portifolios/identidade">
                    </nav>
                    <div class="card-image" >
                        <img style = 'width: 12.5rem; height: 12.5rem; margin-right: auto; margin-bottom: 1.75rem; margin-left: auto; border-radius: 50%;'src = "https://lh3.googleusercontent.com/drive-viewer/AJc5JmRzgqg2wxlY3SbvwJoKlh9YuOakYoidSXzJTIwzcswMAUpM80cB_bX69FxMnMJI0VXV3BzGjbj17M1hFr3tA2b9X1I9kA=w1360-h635" alt="alternative">
                    </div>

                    <div class="card-body">
                        <nav>
                            <a class="card-title" href="portifolios/identidade"><span style="color: black">Identidade Visual</span></a>
                        </nav>

                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <nav>
                        <a href="portifolios/embalagem">
                    </nav>
                    <div class="card-image">
                        <img style = 'width: 12.5rem; height: 12.5rem; margin-right: auto; margin-bottom: 1.75rem; margin-left: auto; border-radius: 50%;'src = "https://lh3.googleusercontent.com/drive-viewer/AJc5JmTnexcNLAnDBiw6hTzDh1uTq1UDe2IjkFH7OxG15DKMo2P-OGi-4GcuznmN29uNJTuOk06AscDrht-JD6dJD0KOc1xoaA=w1360-h635" alt="alternative">
                    </div>
                    <div class="card-body">
                        <a class="card-title" href="portifolios/embalagem"><span style="color: black">Embalagem</span></a>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <nav>
                        <a href="portifolios/midia">
                    </nav>
                    <div class="card-image">
                        <img style = 'width: 12.5rem; height: 12.5rem; margin-right: auto; margin-bottom: 1.75rem; margin-left: auto; border-radius: 50%;'src = "https://lh3.googleusercontent.com/drive-viewer/AJc5JmRRlTefmFu1r_nQuqohXk2k21SOvfHnOsdk2_rBqkKHjXUr3ycXjxL_fgOKQomJHDMC_KNMUiZIcJdy_TaoohiCbEbLHg=w1360-h635" alt="alternative">
                    </div>
                    <div class="card-body">
                        <a class="card-title" href="portifolios/midia"> <span style="color: black">Mídias Sociais</span></a>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <nav>
                        <a href="portifolios/sites">
                    </nav>
                    <div class="card-image">
                        <img style = 'width: 12.5rem; height: 12.5rem; margin-right: auto; margin-bottom: 1.75rem; margin-left: auto; border-radius: 50%;'src = "https://lh3.googleusercontent.com/drive-viewer/AJc5JmTujUcoMCP3p763jBjzvHsvGgwEWikOFXwcQGQ0zDfn6YuaIDD-56Cqm07W4iHLwfyHacUOCwD4jOqUW_BBAUIXS4Vn1Q=w1360-h635" alt="alternative">
                    </div>
                    <div class="card-body">
                        <a class="card-title" href="portifolios/sites"> <span style="color: black">Sites</span></a>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <nav>
                        <a href="portifolios/campanha">
                    </nav>
                    <div class="card-image">
                        <img style = 'width: 12.5rem; height: 12.5rem; margin-right: auto; margin-bottom: 1.75rem; margin-left: auto; border-radius: 50%;'src = "https://lh3.googleusercontent.com/drive-viewer/AJc5JmTPMo2EMnN8B0m-OjTdy8Gx_UajOOofdR9htbASFx43R1SE5qqMmnTLsXwwgR8V_MC4z1bq500HWAyVgZ6-VQ0nrMOZ=w1360-h635" alt="alternative">
                    </div>
                    <div class="card-body">
                        <a class="card-title" href="portifolios/campanha"> <span style="color: black">Campanhas</span></a>
                    </div>
                </div>
                <!-- end of card -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-1 -->
<!-- end of Portfólio -->
@endsection
