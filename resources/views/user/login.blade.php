<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>

    <link rel="canonical" href="{{ url('https://getbootstrap.com/docs/5.1/examples/sign-in/') }}">



    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;

        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset('/Login/signin.css') }}" rel="stylesheet">
</head>

<body class="text-center ">
    <style>
        body {
            background-color: white;
        }


    </style>
    <div class="form-signin border rounded shadow ">

        <form  method="post" action="/signin/registration/">@csrf
            <h2 class="h4 text-center fw-normal mb-3">Warung Chunil</h2>
            <img class="mb-3" src="{{ asset('/brand/bootstrap-logo.svg') }}" alt="" width="60" height="50">
            <h5 class="h5 my-2 fw-normal text-start">Please Login</h5>

            <div class="form-floating">
                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label  for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3 d-flex justify-content-start">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me</label>
            </div>
            <button class="w-100 btn btn-lg btn-dark" type="submit">Sign in</button>
            <style>
                .btn-lg {
                    font-size: 16px;
                }

            </style>
            <p class="mt-5 mb-3 text-muted">&copy;2021</p>
        </form>
    </div>


</body>

</html>
