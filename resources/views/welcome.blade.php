<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Reservation System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Hotel System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rooms.index') }}">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('customers.index') }}">Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('reservations.index') }}">Reservations</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container py-4">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to the Hotel Reservation System</h1>
            <p class="lead">This is a simple hotel reservation system built with Laravel. You can manage rooms, customers, and reservations easily.</p>
            <hr class="my-4">
            <p>Use the navigation bar to access different sections of the system.</p>
            <a class="btn btn-primary btn-lg" href="{{ route('rooms.index') }}" role="button">Manage Rooms</a>
            <a class="btn btn-secondary btn-lg" href="{{ route('customers.index') }}" role="button">Manage Customers</a>
            <a class="btn btn-success btn-lg" href="{{ route('reservations.index') }}" role="button">Manage Reservations</a>
        </div>
    </div>
</body>

</html>