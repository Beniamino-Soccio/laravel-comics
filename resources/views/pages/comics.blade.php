@extends("layouts.app")

@section("page-title", "DC Comics")

@section("main-content")

    <div class="container">
        <div class="row">

            @foreach ( $comics as $singleComic)

                <div class="col-3">
                    {{-- <ul>
                        <li>
                            name: {{$singleComic["title"]}}
                        </li>
                        <li>
                            description: {{$singleComic["description"]}}
                        </li>
                        <li>
                            price: {{$singleComic["price"]}}
                        </li>
                        <li>
                            sale_date: {{$singleComic["sale_date"]}}
                        </li>
                        <li>
                            series: {{$singleComic["series"]}}
                        </li>
                        <li>
                            type: {{$singleComic["type"]}}
                        </li>
                        <li>
                            thumb: {{$singleComic["thumb"]}}
                        </li>
                    </ul>--}}
                    <div class="card mb-3">
                        <img src="{{$singleComic["thumb"]}}" class="card-img-top" alt="{{$singleComic["title"]}}">
                        <div class="card-body text-center">
                          <h5 class="card-text fw-bold fs-6">{{$singleComic["title"]}}</h5>
                          <p class="card-text"> <span class="fw-bold">Price:</span>  {{$singleComic["price"]}}</p>
                          <p class="card-text"> <span class="fw-bold">Series:</span>  {{$singleComic["series"]}}</p>
                        </div>
                    </div>
                </div>



            @endforeach
        </div>
    </div>

@endsection
