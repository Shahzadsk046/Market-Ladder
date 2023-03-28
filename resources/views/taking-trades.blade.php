<head>
    <link rel="stylesheet"
          href={{ asset('css/taking-trades.css') }}>
</head>
@extends('layouts.app')

@section('content')
    <div class="taking-trades-page">
        <div class="taking-trades-heading">
            <h1>Taking the Trades</h1>
        </div>
        <section class="video bg-white mt-3 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Here's a short video on How to Takke the Trades</h1>
                        {{-- <iframe src="https://www.youtube.com/watch?v=nv8Wi7VM11k" width="100%" height="300">
                                    </iframe> --}}
                        <div class="video"
                             style=" border: 2px #720000 solid !important; -webkit-box-shadow: 0px 5px 38px 0px rgba(77,77,77,1); -moz-box-shadow: 0px 5px 38px 0px rgba(77,77,77,1); box-shadow: 0px 5px 38px 0px rgba(77,77,77,1) !important;">

                            <iframe width="100%"
                                    height="640"
                                    poster="{{ url('/images/video.png') }}"
                                    style="border:1px solid rgb(116, 4, 4);"
                                    src="https://www.youtube.com/embed/nv8Wi7VM11k"
                                    title="YouTube video player"
                                    frameborder="1"></iframe>
                            {{-- <img class="img-fluid w-100 shadow" src="{{ url('/images/video.png') }}" alt=""> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
