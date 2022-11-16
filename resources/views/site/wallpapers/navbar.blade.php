<div class="button-group filters-button-group">
    @foreach ($wallpapers as $categoria)
        <a class="button" href="/wallpapers#{{$categoria->first()->categoria->description}}">
            <span>
                {{$categoria->first()->categoria->description}}
            </span>
        </a>
    @endforeach
        <a class="button" href="/wallpapers#API&#129300">
            <span>
                API...?? &#129300
            </span>
        </a>
    
</div>
