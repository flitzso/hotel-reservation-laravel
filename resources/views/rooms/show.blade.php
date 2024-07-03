@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Room Details</h1>
    <table class="table">
        <tr>
            <th>Name</th>
            <td>{{ $room->name }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ $room->description }}</td>
        </tr>
        <tr>
            <th>Capacity</th>
            <td>{{ $room->capacity }}</td>
        </tr>
        <tr>
            <th>Price</th>
            <td>{{ $room->price }}</td>
        </tr>
    </table>
    <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection