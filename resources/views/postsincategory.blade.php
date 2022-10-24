@extends('base')

@section('content')

  <section id="services" class="container">

     <h2 class="display-4 mt-5 mb-3 text-white"><strong>{{$category->category}} Post</strong> </h2>
     <hr>
     @foreach($posts as $post)
      <div class="card my-3 py-3 {{($post->user->gender == 'Male') ? 'male' : 'female'}}">
         <div class="card-body">
            <div class="dropdown float-end bg-secondary bg-opacity-50">
              <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-list"></i> {{$post->category->category}}
              </button>
              <ul class="dropdown-menu bg-primary bg-opacity-50" aria-labelledby="dropdownMenuButton1">

                  @foreach(
                  App\Models\User::whereHas('posts', function($query) use ($post){
                     $query->where('category_id', $post->category_id);
                  })->get() as $user)

                  <li><a class="dropdown-item" href="/authors/{{$user->id}}">{{$user->name}}</a></li>

                  @endforeach

              </ul>
            </div>
            <p class="card-title pb-3">
                <h4><strong>{{$post->user->name}}</strong></h4>
                </p>
                <p>
                    <span class="text-dark float-right" style="font-size: 1.0em; font-weight:500">{{date('M d, Y h:i A', strtotime($post->created_at))}}</span>
                </p>
                <p class="card-text rounded bg-white text-dark p-5 ">
                  {{$post->post}}
                </p>
          </div>
      </div>
      @endforeach
   </section>

@endsection
