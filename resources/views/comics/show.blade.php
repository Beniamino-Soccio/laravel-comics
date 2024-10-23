@extends("layouts.app")

@section("page-title", "DC Comics")

@section("main-content")

    <div class="container">
        <h1 class="fw-bold text-center">DC Comic</h1>
        <h2 class="text-center m-3">{{ $comic["title"] }}</h2>
        <div class="row justify-content-center">
            <div class="col-7">
                <div class="card mb-3">
                    <img src="{{$comic["thumb"]}}" class="card-img-top" alt="{{$comic["title"]}}">
                    <div class="card-body">
                        <h5 class="card-text fw-bold fs-6">{{$comic["title"]}}</h5>
                        <p class="card-text"> <span class="fw-bold">Description:</span>  {{$comic["description"]}}</p>
                        <p class="card-text"> <span class="fw-bold">Price:</span>  {{$comic["price"]}}</p>
                        <p class="card-text"> <span class="fw-bold">Series:</span>  {{$comic["series"]}}</p>
                        <p class="card-text"> <span class="fw-bold">Sale Date:</span>  {{$comic["sale_date"]}}</p>
                        <p class="card-text"> <span class="fw-bold">Type:</span>  {{$comic["type"]}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
