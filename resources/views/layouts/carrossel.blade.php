<link rel="stylesheet" href="css/carrossel.css">

@isset($fotos)
<div class="carousel">  
    <div class="wrap">
        <ul id="instafeed">
            @foreach ($fotos as $foto)
                <img src="{{  $foto->media_url }}" width="200px" height="250px">
            @endforeach
        </ul>
    </div>
</div>
@endisset




