@extends('base')

@section('content')

<body>
    <div class = "container">
        <div class="row mt-5 mb-2">
            <div class="col-md-4 offset-md-4">

                <form action="{{url('/register')}}" method="post">
                    {{csrf_field()}}

                    <div class="card bg-secondary bg-opacity-75">
                        <div class="card-body">
                            <div class="class d-flex justify-content-center">
                                <h1>User Registration</h1>
                            </div> <hr>
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="gender">Gender</label>
                                    <select name="gender" id="gender" class="form-select">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                                <div class="mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <div class="d-grid gap-2 col-6 mx-auto mb-4">
                                    <button class="btn btn-sm btn-success" type="submit">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

@stop
