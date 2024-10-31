<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">

                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="">Edit Commut</h5>
                        <a href="{{ route('Poeple.index') }}" class="btn btn-dark">back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('Poeple.update', ['poeple' => $poeple->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                             {{-- <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" value="{{ $shift->name }}" class="form-control">
                                <div class="form-text text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </div> --}}
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Start</label>
                                <input type="time" name="enter" value="{{ $poeple->enter }}" class="form-control">
                                <div class="form-text text-danger">
                                    @error('start')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                               <div class="mb-3">
                                <label class="form-label">Exit</label>
                                <input type="time" name="exit" value="{{ $poeple->exit }}" class="form-control">
                                <div class="form-text text-danger">
                                    @error('end')
                                        {{ $message }}
                                    @enderror
                                </div>
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
