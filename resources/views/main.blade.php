<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>main List</title>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10">

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="">shifts</h5>
        </div>
        <div class="card-body">
            <table class="table table-striped align-middle">
            <thead>
            <tr>
            <th>INDEX URI</th>
            <th>CREATE URI</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td><a  href="{{ route('Shift.index') }}" class="btn btn-dark">Index</a></td>
            <td><a href="{{ route('Shift.create') }}" class="btn btn-dark">Create</a></td>
            </tr>
            </tbody>
           
            </table>
        </div>
        
    </div>

     <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="">commutes</h5>
        </div>
        <div class="card-body">
            <table class="table table-striped align-middle">
            <thead>
            <tr>
            <th>INDEX URI</th>
            <th>CREATE URI</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td><a  href="{{ route('Poeple.index') }}" class="btn btn-dark">Index</a></td>
            <td><a href="{{ route('Poeple.create') }}" class="btn btn-dark">Create</a></td>
            </tr>
            </tbody>
           
            </table>
        </div>
        
    </div>

        </div>
    </div>
</div>
</html>
