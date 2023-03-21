<head>
    <link rel="stylesheet" href={{ asset('css/about.css') }}>
</head>
@extends('layouts.app')

@section('content')
    <div class="about-page">

        <div class="about-heading">
            <h1>ABOUT THE MARKET LADDER</h1>
            <h6>Your Online Tool To Stock Market Success</h6>
        </div>

        <div class="container">
            <section class="goal-of-company">
                <div class="row py-5">
                    <img width="100%" class="pb-3" src="{{ url('/images/Goal-Performance.png') }}" alt="Goal Performance">
                    <h2>The Goal of The Market Ladder is to help the individual investor to grow their investments with the
                        best
                        possible swing trades.</h2>
                    <p>And to accomplish that goal, we focus on trades that the average individual can do in his/her own
                        account. That means we post "buy trades" in stocks, and ETFs. These types of trades can be performed
                        in
                        any general trading account through most brokerages.</p>
                </div>
            </section>
            <section class="stock-price">
                <div class="row">
                    <div class="col-md-4">
                        <img width="100%" src="{{ url('/images/goal.png') }}" alt="Goal Performance">
                    </div>
                    <div class="col-md-8">
                        <p>Stock prices can act like rungs in a ladder, providing Support. We want to capitalize on this
                            phenomenon and buy when price gets close to one of these "Support Rungs" so that we get an edge
                            on
                            the risk/reward of price action going forward. (Hence "The Market Ladder") Now, we don't just
                            look
                            for these "Support Pattern" trades, but it is our favorite pattern to trade.</p>
                        <p>Whatever the pattern, every potential trade is analyzed to make sure it meets all the
                            requirements
                            of being a great trade setup. **Typically, the trades may only have an expected win/loss ratio
                            of
                            50%, but the profit potential is at least twice that of the loss potential... And that's the key
                            to
                            making it a good strategic bet. By repeating this process over and over, there is the potential
                            to
                            far outperform typical market returns.</p>
                    </div>
                </div>
            </section>
            <section class="about-membership my-3 py-5">
                <div class="row">
                    <p>At the Market Ladder, we offer two levels of membership. For the "Basic Level," stock trades are
                        posted Sundays and Thursday evenings. These trades are broken down into their basic coomponents so
                        every aspect of the trade is known. You can then take the trades you want.</p>

                    <p>For the more "aggressive traders", we offer the "Plus Level," which also includes trades in leveraged
                        and inverse ETFs. That allows amplification of trade results, and also the ability to take trades
                        that show a profit when assets fall in price. These will be posted Sundays and Wednesday evenings.
                    </p>
                    <p>Once you get commfortable with taking the trades, it shouldn't take more than just a few minutes to
                        set up the trade with your broker, and once the trade gets filled, another few minutes to set your
                        stops: (There is a quick video for members so that you can understand exactly how to take the trades
                        you want.)</p>
                </div>
            </section>

            <section class="about-performance">
                <div class="row">
                    <div class="col-md-8">
                        <p>We believe in full transparency, so we track and publish every trade result. At the end of every
                            month, we tabulate the results and post those results on the performance page.</p>
                        <p>(Not al trades will get filled, and that's OK. Most of the trades will come with "Limmit Orders."
                            This means the trade will not get filled unless the price we want to see occurs in the next few
                            days. So, we may have to pass on 50% of the possible trades so that we always get filled at a
                            price
                            we want. )</p>
                        <a href="#" class="text-info text-decoration-none fs-5">Current Performance</a>
                    </div>
                    <div class="col-md-4">
                        <img width="100%" src="{{ url('/images/performance.png') }}" alt="Goal Performance">
                    </div>
                </div>
            </section>
            <section class="are-you-ready">
                <div class="row">
                    <p><strong>
                        Are you ready to give it a try? >>>> For the New Subscribers, feel free to take the 30 day free trial. Then, you can understand how it all works, and decide on which plan might be best for you. We offer very reasonable membership rates, so hopefully cost is never an issue. <a href="#" class="text-success text-decoration-none">Join Now</a>
                    </strong></p>
                    <p><strong>**There are no guarantees of profitability, and you may lose substantial money.</strong></p>
                    <br>
                </div>
                <div class="join-btn d-flex flex-row justify-content-end align-items-center">
                    <button class="btn btn-light text-success fw-bold">Join Now ! &nbsp;<i class="fas fa-arrow-right"></i></button>
                </div>
            </section>
        </div>
    </div>
@endsection
