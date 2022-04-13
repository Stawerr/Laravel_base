@extends('master.main')

@section('content')

    @component('components.table.tableoneguy', [
                       'player' =>$player,
                   ])
    @endcomponent

@endsection
