@extends("layouts.app")

@section("page-title", "DC Comics")

@section("main-content")

    <div class="container">
        <div class="row">

            @foreach ( $comics as $index => $singleComic)

                <div class="col-3">
                    <div id="cards-comics" class="card mb-4">
                        <img id="img-cards-comics" src="{{$singleComic["thumb"]}}" class="card-img-top" alt="{{$singleComic["title"]}}">
                        <div class="card-body text-center">
                            <h5 class="card-text fw-bold fs-6">{{$singleComic["title"]}}</h5>
                            <p class="card-text"> <span class="fw-bold">Price:</span>  {{$singleComic["price"]}}</p>
                            <p class="card-text"> <span class="fw-bold">Series:</span>  {{$singleComic["series"]}}</p>
                            <a href="{{ route("comic.show", $index)}}">more info</a>
                        </div>
                    </div>
                </div>



            @endforeach
        </div>
    </div>

@endsection
