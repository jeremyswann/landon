@extends('layouts.app')

@section('content')
    <div class="row mb-3">
        <div class="col-12"><h4>Clients/Booking</h4></div>

        <div class="col-lg-3 col-sm-4">BOOKING FOR:</div>
        <div class="col-lg-3 col-sm-4 "><h5>
                {{ $client->title }}.
                {{ $client->name }}
                {{ $client->last_name }}
            </h5></div>
    </div>

    <form action="" method="post" class="row mb-3">
        <div class="col-lg-3 col-sm-4">
            <div class="input-group">
            <span class="input-group-addon bg-secondary text-light">FROM:</span>
            <input name="dateFrom" class="form-control datepicker" value="{{ $dateFrom }}" type="text"/>
            </div>
        </div>
        <div class="col-lg-3 col-sm-4">
            <div class="input-group">
            <span class="input-group-addon bg-secondary text-light">TO:</span>
            <input name="dateTo" value="{{ $dateTo }}" type="text" class="form-control datepicker" />
            </div>
        </div>
        <div class="col-lg-3 col-sm-4">
            <input class="btn btn-secondary" type="submit" value="SEARCH" />
        </div>
    </form>

    <table class="table">
        <thead class="bg-secondary text-light">
        <tr>
            <th width="200">Room</th>
            <th width="200">Availability</th>
            <th width="200">Action</th>
        </tr>
        </thead>
        <tbody>

            @unless( empty( $dateFrom ) || empty( $dateTo ))
            @foreach ( $rooms as $room )
                <tr>
                    <td>{{ $room->name }}</td>
                    <td>
                        <div class="btn btn-success">
                            <h7>Available</h7>
                        </div>
                    </td>
                    <td>
                        <a class="btn btn-outline-warning"
                            href="{{
                            route('book_room',
                                ['client_id' => $client->id,
                                    'room_id' => $room->id,
                                    'date_in' => $dateFrom,
                                    'date_out' => $dateTo
                                ]
                            )
                            }}">
                            BOOK NOW
                        </a>
                    </td>
                </tr>
            @endforeach
            @endunless

        </tbody>
    </table>
@endsection