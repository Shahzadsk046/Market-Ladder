<head>
    <link rel="stylesheet" href={{ asset('css/home.css') }}>
</head>
@extends('layouts.app')



@section('content')
    <div class="m-0 p-0 container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-0">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div style="position: relative; left:0; top:0;">
                    <img class="ladder" src="{{ url('/images/ladder.png') }}" width="100%" alt="Ladders">
                    <img class="logo" src="{{ url('/images/logo.png') }}" width="20%" alt="Logo">
                    <p class="text-image">Swing Trade <br>Your Investments <br>to New Heights!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row w-100">
            <div class="col-md-4 p-5">
                <h1 class="fw-bold">What is the Market Ladder?</h1>
                <p class="text-gray fw-light">The Goal of The Market Ladder is to help the individual investor to grow their investments with the best
                    possible swing trades. Here, we will show you exactly how to take swing trades in stocks, and/or etfs.
                    <br>
                    <br>
                    We provide the very best possible trades for the individual investor. Every Trade is carefully analyzed
                    to make sure it is showing a good risk/reward ratio through technical analysis.
                </p>
                <button class="btn btn-danger">About Us</button>
            </div>
            <div class="col-md-8 p-0 m-0">
                <img width="102.6%" src="{{ url('/images/rhino.png') }}"
                    alt="Rhino Image"></div>
        </div>
    </div>
@endsection
