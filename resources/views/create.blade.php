@extends('base')

@section('content')

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4 offset-md-4">
                <div class="card-header bg-primary bg-opacity-75">
                    <h1 class="text-center text-white"><strong>Create Post</strong> </h1> <hr>
                </div>
                <div class="card-body bg-secondary bg-opacity-50">
                    <form action="{{url('/createpost')}}" method="post">
                        {{csrf_field()}}
                        <div class="mb-3">
                            <label for="category_id"> Category </label>
                            <select name="category_id" id="category_id" class="form-select">
                                @foreach(App\Models\Category::get() as $category)
                                <option value="{{$category->id}}">{{$category->category}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="post">Post</label>
                            <textarea name="post" id="post" cols="30" rows="6" class="form-control"></textarea>
                        </div>
                        <div class="d-grid gap-2 col-5 mx-auto">
                            <button class="btn btn-primary" type="submit"> Submit </button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
    </div>
</body>


@stop
