@extends('base')

@section('content')

<br>
<br><br>
<body>
    <div class="container mt-1">
        <div class="row mt-5">
            <div class="col-md-4 offset-md-4">
                <div class="card bg-secondary bg-opacity-75">
                    <div class="card-body">
                        <div class="class d-flex justify-content-center">
                            <h1>LogIn</h1>
                        </div>  <hr>
                <div class="card-body">
                    <form action="{{url('/login')}}" method="post">
                        {{csrf_field()}}
                        <div class="mb-4">
                            <label for="email"> Email </label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password"> Password </label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>

                        <div class="d-grid gap-2 col-5 mx-auto mt-4 mb-4">
                            <button class="btn btn-success" type="submit">Login</button>
                        </div>
                            <p><a href="/">Forgot Password?</a></p>
                    </form>
            </div>
        </div>
    </div>
    </div>
</body>


@stop
