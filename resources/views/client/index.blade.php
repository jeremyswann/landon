@extends('layouts.app')

@section('content')
    <div class="row">
        <h4>Clients</h4>
    </div>
    <div class="row">
        <div class="col-lg-3 mb-3">
            <a class="btn btn-outline-success" href="{{ route('new_client') }}">ADD NEW CLIENT</a>
        </div>
        <div class="col-lg-10">

        </div>
        <table class="table col-lg-10 ml-0">
            <thead>
            <tr>
                <th width="200">Name</th>
                <th width="200">Email</th>
                <th width="200">Action</th>
            </tr>
            </thead>
            <tbody>

            @foreach( $clients as $client)
            <tr>
                <td>{{ $client->title }}. {{ $client->name }} {{ $client->last_name }}</td>
                <td>{{ $client->email }}</td>
                <td>
                    <a class="btn btn-outline-secondary" href="{{ route('show_client', ['client_id' => $client->id ]) }}">EDIT</a>
                    <a class="btn btn-outline-warning" href="{{ route('check_room', ['client_id' => $client->id ]) }}">BOOK A ROOM</a>
                </td>
            </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection