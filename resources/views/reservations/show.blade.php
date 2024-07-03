@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Reservation Details</h1>
    <table class="table">
        <tr>
            <th>Room</th>
            <td>{{ $reservation->room->name }}</td>
        </tr>
        <tr>
            <th>Customer</th>
            <td>{{ $reservation->customer->name }}</td>
        </tr>
        <tr>
            <th>Check-in</th>
            <td>{{ $reservation->check_in }}</td>
        </tr>
        <tr>
            <th>Check-out</th>
            <td>{{ $reservation->check_out }}</td>
        </tr>
    </table>
    <a href="{{ route('reservations.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection