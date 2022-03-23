@extends('master.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @component('components.carousel.carrousel', [
                    'images' => [
                        'https://media.gettyimages.com/photos/audi-a4-quattro-sedans-picture-id459005525?s=2048x2048',
                        'https://media.gettyimages.com/photos/audi-a3-quattro-steering-wheel-picture-id157728351?s=2048x2048',
                        'https://media.gettyimages.com/photos/audi-vehicles-on-the-parking-picture-id615509902?s=2048x2048',
                        'https://media.gettyimages.com/photos/white-audi-a6-in-charleston-usa-picture-id459014029?s=2048x2048'
                    ]
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
                    'images'=>[
                        'https://media.gettyimages.com/photos/audi-a4-quattro-sedans-picture-id459005525?s=2048x2048',
                        'https://media.gettyimages.com/photos/audi-a4-quattro-sedans-picture-id459005525?s=2048x2048'
                     ]
                ])
                @endcomponent
        </div>
    </div>

@endsection
