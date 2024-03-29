<h1>Players</h1>
<table class="table table-striped table-dark">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Birth Date</th>
        <th scope="col">Car</th>
        <th scope="col">Address</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($players as $player)
        <tr>
            <td> {{$player->id}}</td>
            <td>{{$player->name}}</td>
            <td>{{$player->birth_date}}</td>
            <td>
            @foreach($player->cars as $car)
                <p>{{$car->name}}</p>
            @endforeach
            </td>
            <td><p>{{$player->address->address}}</p> <p>{{$player->address->country->name}}</p> </td>
            <td>
                <a href="{{url('players/'.$player->id)}}">Show </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
