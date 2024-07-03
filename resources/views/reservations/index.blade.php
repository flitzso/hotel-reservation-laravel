@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Reservations</h1>
    <a href="{{ route('reservations.create') }}" class="btn btn-primary">Add Reservation</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Room</th>
                <th>Customer</th>
                <th>Check-in</th>
                <th>Check-out</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
            <tr>
                <td>{{ $reservation->room->name }}</td>
                <td>{{ $reservation->customer->name }}</td>
                <td>{{ $reservation->check_in }}</td>
                <td>{{ $reservation->check_out }}</td>
                <td>
                    <a href="{{ route('reservations.edit', $reservation) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('reservations.destroy', $reservation) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection