<div class="container pt-5">
    <div class="row">
        @foreach($images as $image)
        <div class="col-4">
            @component('components.card.card',
            [
                'image'=> $image,
                'title'=> "Title  {$loop->index}",
                'desc'=> "Desc  {$loop->index}",
                ])
            @endcomponent
        </div>
        @endforeach
    </div>
</div>
<p></p>
