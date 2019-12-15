<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto mt-5">
                <form action="#" method="post">
                    <h3 class="my-3">Provide your credentials</h3>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    <a href="{{ route('user.regi') }}">Don't have any Account? Create your account.</a>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>
