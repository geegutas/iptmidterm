<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>IPT2 Midterm CheapTalk</title>
</head>

<style>
    .container{
        margin-top:50px;
    }
    .navbar{
        height:30px;
        padding-bottom: 3%;
    }

</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top shadow-lg">
        <div class="container">
            <a class="navbar-brand text-white" href="/"><strong> CheapTalk </strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @if(Auth::check())
                        <li class="nav-item">
                            <a class="nav-link box text-white" href="/dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                            </a>
                            <ul class="dropdown-menu bg-primary bg-opacity-25" aria-labelledby="navbarDropdown">
                                @foreach(App\Models\Category::get() as $category)
                                <li>
                                    <a class="dropdown-item text-white" href="/categories/{{$category->id}}">{{$category->category}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link box text-white" href="/authors"> Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link box text-white" href="/logout">Logout</a>
                        </li>
                    @else
                        <li><a class=" nav-link box text-white " href="/login">Login</a></li>
                        <li><a class=" nav-link box text-white" href="/register">Register</a></li>
                    @endif
                </ul>
              </div>
        </div>
    </nav>
</div>
<br>
    @if (session ('Error'))
        <div class="alert alert-danger">
            <div class="container">
                {{session('Error')}}
            </div>
        </div>
    @endif
    @if (session ('Message'))
        <div class="alert alert-info">
            <div class="container">
                {{session('Message')}}
            </div>
        </div>
    @endif
    @if (session ('errors'))
        <div class="alert alert-danger">
            <div class="container">
                Please fix the following errors
                <ul>
                    @foreach (session('errors')->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    </div>
        @yield('content')
    </div>
</body>
</html>
