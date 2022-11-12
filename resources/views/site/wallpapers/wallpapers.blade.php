
@extends('layouts.main')

<!-- Header -->


   @section('title', 'Sites')

   @section('content')

<!-- Projects -->
<div id="projects" class="filter">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Wallpapers</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->

        <br><br><br>
        
        <div class="row">
            <div class="col-lg-12">
                
                @include('site.wallpapers.navbar')
                
                
                
                @foreach ($wallpapers as $categoria)                
                    <div id="{{$categoria->first()->categoria->description}}"></div>
                    <br><br><br><br><br>
                    <h3>
                        {{$categoria->first()->categoria->description}}
                    </h3>

                    <div class="row">
                        
                        <div class="grid">                         
                            @foreach($categoria as $wallpaper)
                                <div class="element-item embalagens" >
                                    <div class="element-item-overlay">
                                        <a href="{{$wallpaper->image}}">
                                            <span>
                                                {{$wallpaper->name}}
                                            </span>
                                        </a>
                                    </div>
                                    <img src="{{$wallpaper->image}}" alt=""></a>
                                </div>
                            @endforeach
                        </div> <!-- end of grid -->
                    </div>
                @endforeach
               
                <!-- end of filter -->

            
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of filter -->
<!-- end of projects -->
        <div id="API&#129300"></div>    
        <br><br><br><br>
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <p>Disponibilizo esses Wallpapers através de uma <b>API</b>...</p>
                <p>Você pode utilizá-las gratuitamente... acesse a <a style="color: blue" href="/api/documentation">documentação</a>!</p>
                <hr>
            </div> <!-- end of col -->   
        </div> <!-- end of row -->
<br><br><br><br><br>
@endsection
