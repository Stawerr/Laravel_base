@extends('master.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @component('components.carousel.carrousel', [
                    'images' =>$imagesCarousel

                ])
                @endcomponent
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @component('components.cards.cards')
                @endcomponent
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
                @component('components.content.contentImage',[
                    'images'=>$imagesText
                ])
                @endcomponent
        </div>
    </div>

@endsection
