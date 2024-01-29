<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <style>
        body {
            background-color: #3c4c5b;
            color: #fff;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h2 a {
            color: #fff;
            text-decoration: none;
        }

        h2 a:hover {
            color: #ccc;
        }

        .container {
            margin-top: 50px;
        }

        .col-md-4 {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0px 0px 10px 0px #000000;
        }

        h4 {
            text-align: center;
            color: #3c4c5b;
        }

        hr {
            border-color: #3c4c5b;
        }

        form {
            margin-top: 20px;
        }

        label {
            color: #3c4c5b;
        }

        .form-control {
            border-radius: 4px;
        }

        .btn-primary {
            background-color: #3c4c5b;
            border: none;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #2c3c4b;
        }

        a {
            color: #3c4c5b;
            text-decoration: none;
        }

        a:hover {
            color: #2c3c4b;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            border-radius: 4px;
            padding: 10px;
            margin-bottom: 20px;
        }

        .text-danger {
            color: #721c24;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top: 45px">
                <a href="/"><img src="{{ asset('gif.gif') }}" alt="" width="50px"></a>
                 <h4>Admin Login</h4><hr>
                 <form action="{{ route('admin.check') }}" method="post">
                    @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                    @csrf
                     <div class="form-group">
                         <label for="email">Email</label>
                         <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                         <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                     </div>
                     <div class="form-group">
                         <label for="password">Password</label>
                         <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{ old('password') }}">
                         <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                     </div>
                     <div class="form-group">
                         <button type="submit" class="btn btn-primary">Login</button>
                     </div>
                 </form>
            </div>
        </div>
    </div>
</body>
</html>
