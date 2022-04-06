<h1>Players</h1>
<table class="table table-striped table-dark">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Birth Date</th>
    </tr>
    </thead>
    <tbody>
    @foreach($players as $player)
        <tr>
            <td> {{$player->id}}</td>
            <td>{{$player->name}}</td>
            <td>{{$player->birth_date}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
