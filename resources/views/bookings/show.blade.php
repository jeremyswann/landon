@extends('layouts.app')

@section('content')
    <div class="row mb-3">
        <div class="col-12"><h4>Clients/Booking</h4></div>

        <div class="col-lg-3 col-sm-4">BOOKING FOR:</div>
        <div class="col-lg-3 col-sm-4 "></div><h5>
            {{ $title }}.
            {{ $name }}
            {{ $last_name }}
        </h5>
    </div>

    <table class="table">
        <thead class="bg-secondary text-light">
        <tr>
            <th width="200">Room No.</th>
            <th width="200">Status</th>
            <th width="200">Dates</th>
        </tr>
        </thead>
        <tbody>




            @foreach ( $bookings as $booking )
                <tr>
                    <td>{{ $booking->room_id }}</td>
                    <td>
                        <div class="btn btn-success">
                            <h7>Booked</h7>
                        </div>
                    </td>
                    <td>{{ $booking->date_in }} to {{ $booking->date_out }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection