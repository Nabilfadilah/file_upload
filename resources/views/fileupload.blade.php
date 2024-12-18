<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 File Upload with Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4 ">
        <h2 class="text-center">Laravel 11 File Upload with Validation </h2>
        <form method="POST" enctype="multipart/form-data" id="upload" action="{{ url('upload') }}">
            @csrf
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="form-group">
                        <input type="file" name="file" placeholder="Choose file" id="file">
                        @error('file')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 offset-md-3">
                    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                </div>
                <br>
                <div class="col-md-6 offset-md-3">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </form>
    </div>
    </div>
</body>

</html>

</head>

<body>

</body>

</html>
