    @foreach($images as $image)
        @if($loop->even)
            <div class="col-6 ">
                <img src="{{$image}}" alt="..." width="500" height="300">
            </div>
            <div class="col-6 ">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi aperiam commodi, ea harum illum iusto odio optio perferendis similique vitae voluptas voluptatum. Alias ducimus, necessitatibus possimus quibusdam vitae voluptate?</p>
            </div>
        @else
            <div class="col-6 ">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquid corporis cum debitis doloribus eos eveniet in, incidunt ipsum itaque laudantium nesciunt nisi numquam officiis provident quia quisquam rem reprehenderit!</p>
            </div>
            <div class="col-6 ">
                <img src="{{$image}}" alt="..." width="500" height="300">
            </div>
        @endif
    @endforeach
