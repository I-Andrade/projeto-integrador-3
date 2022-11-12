<link rel="stylesheet" href="css/carrossel.css">

@isset($fotos)
 <div class="outer-container">{{-- carrossel de imagens do instagram --}}
    <br><br><br>
        <div class="slider-container">
        <div class="swiper-container image-slider-2">
            <div class="swiper-wrapper">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <div class="slide-first">     
            </div>
                    @foreach ($fotos as $foto)
                            <div class="swiper-slide">
                            <img class="img"  src="{{ $foto->media_url }}" >
                            </div>
                    @endforeach

                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>
                    <div class="manual-navigation">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                        <label for="radio3" class="manual-btn"></label>
                        <label for="radio4" class="manual-btn"></label>
                    </div>
                </div>
        </div>
    </div>

</div>

<script src="\js\carrossel.js"></script>

@endisset
