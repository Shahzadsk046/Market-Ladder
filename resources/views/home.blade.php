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
    <section class="container-fluid bg-white">
        <div class="row w-100 d-flex align-items-center">
            <div class="col-md-4 p-5">
                <h1 class="fw-bold">What is the Market Ladder?</h1>
                <p class="market-goal text-gray fw-light">The Goal of The Market Ladder is to help the individual investor
                    to grow their investments with the best
                    possible swing trades. Here, we will show you exactly how to take swing trades in stocks, and/or etfs.
                    <br>
                    <br>
                    We provide the very best possible trades for the individual investor. Every Trade is carefully analyzed
                    to make sure it is showing a good risk/reward ratio through technical analysis.
                </p>
                <button class="btn btn-danger">About Us</button>
            </div>
            <div class="col-md-8 p-0 m-0">
                <img width="102.6%" src="{{ url('/images/rhino.png') }}" alt="Rhino Image">
            </div>
        </div>
    </section>
    <section class="testimonial container-fluid bg-light">
        <div class="row w-75 m-auto mt-5">
            <div class="col-md-4 border border-top-0 d-flex flex-column">
                <i class="fas fa-chart-bar fs-3 text-center" style="color:red"></i>
                <h3 class="text-center">The Market Ladder</h3>
                <ul class="list">
                    <li>Employs technical analysis to find stocks that are at a potential pivot point and buys there so that
                        losses can be minimized, while profits maximized.</li>
                    <li>Finds the best possible trades for the individual investor.</li>
                </ul>
            </div>
            <div class="col-md-4 border border-top-0 d-flex flex-column">
                <i class="t fs-3 text-center" style="color:red"></i>
                <h3 class="text-center">Trades</h3>
                <ul class=" list">
                    <li>Trading ideas are posted regularly, take the trades you want.</li>
                    <li>Each trade is broken down into its basic components, so you know exactly when to buy, and sell.</li>
                    <li>By keeping your money in *High Profitability Trades, you have the potential to far outperform standard market returns.</li>
                </ul>
            </div>
            <div class="col-md-4 border border-top-0 d-flex flex-column">
                <i class="fas fa-check fs-3 text-center" style="color:green"></i>
                <h3 class="text-center">Join Now</h3>
                <ul class="fa-ul fw-bold">
                    <li><span class="fa-li"><i class="fas fa-hand-point-right"></i></span>Join now while prices are at
                        their lowest.</li>
                    <li><span class="fa-li"><i class="fas fa-hand-point-right"></i></span>Not sure? Start your Free 30 day
                        Trial for first timer Subscribers</li>
                    <li><span class="fa-li"><i class="fas fa-hand-point-right"></i></span>Learn More about the Market
                        Ladder</li>
                </ul>
            </div>
        </div>
    </section>
@endsection
