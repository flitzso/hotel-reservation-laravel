@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Reservation</h1>
    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="room_id" class="form-label">Room</label>
            <select name="room_id" class="form-control" id="room_id" required>
                @foreach ($rooms as $room)
                <option value="{{ $room->id }}">{{ $room->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="customer_id" class="form-label">Customer</label>
            <select name="customer_id" class="form-control" id="customer_id" required>
                @foreach ($customers as $customer)
                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="check_in" class="form-label">Check-in</label>
            <input type="date" name="check_in" class="form-control" id="check_in" required>
        </div>
        <div class="mb-3">
            <label for="check_out" class="form-label">Check-out</label>
            <input type="date" name="check_out" class="form-control" id="check_out" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection