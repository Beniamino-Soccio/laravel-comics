@extends("layouts.app")

@section("page-title", "DC Comics")

@section("main-content")

    <div class="container">
        <h1 class="fw-bold text-center p-5">DC Comic</h1>
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card mb-3">
                    <img src="{{$comic["thumb"]}}" class="card-img-top" alt="{{$comic["title"]}}">
                    <div class="card-body text-center">
                        <h5 class="card-text fw-bold fs-6">{{$comic["title"]}}</h5>
                        <p class="card-text"> <span class="fw-bold">Price:</span>  {{$comic["price"]}}</p>
                        <p class="card-text"> <span class="fw-bold">Series:</span>  {{$comic["series"]}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
