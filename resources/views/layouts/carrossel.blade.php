<link rel="stylesheet" href="css/carrossel.css">

@isset($fotos)
 <div class="outer-container">{{-- carrossel de imagens do instagram --}}
    <br><br><br>
        <div class="slider-container">

        <div class="swiper-container image-slider-2">

            <div class="swiper-wrapper" style="height: 50%;">

                <div class="slide-first">
            </div>
                    @foreach ($fotos as $foto)
                            <div class="swiper-slide">
                            <img class="img"  src="{{ $foto->media_url }}" >
                            </div>
                    @endforeach


                </div>
        </div>
    </div>

</div>

<script src="\js\carrossel.js"></script>

@endisset
