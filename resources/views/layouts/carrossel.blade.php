<link rel="stylesheet" href="css/carrossel.css">

@isset($fotos)
 <div class="outer-container" style="margin-top: 50px; max-height: 400px;">
        <div class="slider-container">
            <div class="swiper-container image-slider-2" style="max-height: 400px;">
                <div class="swiper-wrapper">                  
                    @foreach ($fotos as $foto)
                        <div class="swiper-slide" style="max-height: 400px;">
                            <img class="img" style="min-width: 100%; max-width: 300px;" src="{{ $foto->media_url }}" >
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endisset
