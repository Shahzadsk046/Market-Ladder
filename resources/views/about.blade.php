<head>
    <link rel="stylesheet" href={{ asset('css/about.css') }}>
</head>
@extends('layouts.app')

@section('content')
    <div class="about-heading">
        <h1>ABOUT THE MARKET LADDER</h1>
        <h6>Your Online Tool To Stock Market Success</h6>
    </div>

    <section class="goal-of-company">
        <div class="container">
            <div class="row py-5">
                <img width="100%" src="{{ url('/images/Goal-Performance.png') }}" alt="Goal Performance">
                <h2>The Goal of The Market Ladder is to help the individual investor to grow their investments with the best
                    possible swing trades.</h2>
                <h5>And to accomplish that goal, we focus on trades that the average individual can do in his/her own
                    account. That means we post "buy trades" in stocks, and ETFs. These types of trades can be performed in
                    any general trading account through most brokerages.</h5>
            </div>
        </div>
    </section>
    <section class="stock-price">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img width="100%" src="{{ url('/images/goal.png') }}" alt="Goal Performance">
                </div>
                <div class="col-md-8">
                    <h5>Stock prices can act like rungs in a ladder, providing Support. We want to capitalize on this
                        phenomenon and buy when price gets close to one of these "Support Rungs" so that we get an edge on
                        the risk/reward of price action going forward. (Hence "The Market Ladder") Now, we don't just look
                        for these "Support Pattern" trades, but it is our favorite pattern to trade.</h5>
                    <br>
                    <h5>Whatever the pattern, every potential trade is analyzed to make sure it meets all the requirements
                        of being a great trade setup. **Typically, the trades may only have an expected win/loss ratio of
                        50%, but the profit potential is at least twice that of the loss potential... And that's the key to
                        making it a good strategic bet. By repeating this process over and over, there is the potential to
                        far outperform typical market returns.</h5>
                </div>
            </div>
        </div>
    </section>
@endsection
