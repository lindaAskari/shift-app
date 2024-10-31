<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>shifts List</title>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10">

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="">shifts</h5>
            <a href="{{ route('Shift.create') }}" class="btn btn-dark">create</a>
            <a href="{{ route('main') }}" class="btn btn-dark">Main Page</a>
        </div>
        <div class="card-body">
            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Enter</th>
                        <th>Exit</th>
                        <th>Payment</th>

                       
                    </tr>
                </thead>
                <tbody>
                    @foreach ($shifts as $shift)
                        <tr>
                            <td>{{ $shift->name }}</td>
                            
                            <td>{{ $shift->start }}</td>
                            <td>{{ $shift->end }}</td>
                            <td>{{ $shift->payment }}</td>
                            <td class="d-flex">
                                <a href="{{ route('Shift.edit', ['shift' => $shift->id]) }}" class="btn btn-sm btn-secondary">Edit</a>
                                <form action="{{ route('Shift.destroy', ['shift' => $shift->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger ms-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

        </div>
    </div>
</div>
</html>
