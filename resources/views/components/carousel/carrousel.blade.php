
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach($images as $image)
                <li data-target="#carouselExampleIndicators" data-slide-to="@if($loop->index)"@endif @if($loop->first) class="active" @endif ></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach($images as $image)
                <div class="carousel-item @if($loop->first) active @endif">
                    <img src="{{$image}}" class="d-block w-100" alt="...">
                </div>
            @endforeach

        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>

