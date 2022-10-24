@extends('base')

@section('content')

  <section id="services" class="container">
        <h2 class="display-4 mt-5 mb-3 text-white"><strong> Users</strong> </h2> <hr>
        @foreach($users as $user)
        <div class="card my-3 py-3 {{($user->gender == 'Male') ? 'male' : 'female'}}">
            <div class="card-body">
                <h5 class="card-title">
                   <strong> {{$user->name}} </strong>
                </h5>
                <h3>
                    <a href="/authors/{{$user->id}}" class="btn text-dark"><i class="fas fa-arrow-right"></i> Open User Posts</a>
                </h3>
            </div>
        </div>
      @endforeach
   </section>

@endsection
