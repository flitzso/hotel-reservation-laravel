@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Customer Details</h1>
    <table class="table">
        <tr>
            <th>Name</th>
            <td>{{ $customer->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $customer->email }}</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>{{ $customer->phone }}</td>
        </tr>
    </table>
    <a href="{{ route('customers.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection