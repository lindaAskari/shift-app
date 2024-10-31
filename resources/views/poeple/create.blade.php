<?php
use App\Models\shift;
use App\Models\User;

$users=User::all();
$shifts=shift::all();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create shift</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">

                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="">New commute</h5><a href="{{ route('Shift.index') }}" class="btn btn-dark">back</a>
                        </div>
                    <div class="card-body">
                <form action="{{route('Poeple.store')}}" method="POST">
                            @csrf
                            <div class=" col-md-12">
                            <label for="user" class="form-label">User</label>
                            <select id="user_id" name="user_id" class="form-select @error('password') is-invalid @enderror">
                                <option selected disabled hidden>Choose...</option>
                                @foreach ($users as $user)
                                <option value="{{$user->id}}">{{ $user->name}}</option>
                                    
                                @endforeach
                               
                            </select>
                            @error('user')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                            <div class="mb-3">
                                <label class="form-label">Enter</label>
                                <input type="time" name="enter" class="form-control">
                                <div class="form-text text-danger">@error('enter') {{ $message }} @enderror</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Exit</label>
                                <input type="time" name="exit" class="form-control">
                                <div class="form-text text-danger">@error('exit') {{ $message }} @enderror</div>
                            </div>
                            <button type="submit" class="btn btn-secondary">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>





                  
         