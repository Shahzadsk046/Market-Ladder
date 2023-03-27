<head>
    <link rel="stylesheet"
          href={{ asset('css/home.css') }}>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script type="text/javascript"
            src="{{ asset('js/home.js') }}"></script>

</head>
@extends('layouts.app')

@section('content')
    <div id="alertDelete"
         class="alert alert-warning alert-dismissible text-center p-2 fs-6 fw-bold"
         role="alert">
        Thanks for stopping by, we are opening Soon but not quite ready, Please check back in a couple weeks for our grand
        opening!
    </div>
    <div class="m-0 p-0 container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-0">
                @if (session('status'))
                    <div class="alert alert-success"
                         role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div style="position: relative; left:0; top:0;">
                    <img class="ladder"
                         src="{{ url('/images/ladder.png') }}"
                         width="100%"
                         alt="Ladders">
                    <img class="logo"
                         src="{{ url('/images/logo.png') }}"
                         width="20%"
                         alt="Logo">
                    <p class="text-image">Swing Trade <br>Your Investments <br>to New Heights!</p>
                </div>
            </div>
        </div>
    </div>
    <section class="about container-fluid bg-white">
        <div class="row w-100 d-flex align-items-center">
            <div class="col-md-6 p-5">
                <h1 class="fw-bold">What is the Market Ladder?</h1>
                <p class="market-goal text-gray fw-light">The Goal of The Market Ladder is to help the individual investor
                    to grow their investments with the best
                    possible swing trades. Here, we will show you exactly how to take swing trades in stocks, and/or etfs.
                    <br>
                    <br>
                    We provide the very best possible trades for the individual investor. Every Trade is carefully analyzed
                    to make sure it is showing a good risk/reward ratio through technical analysis.
                </p>
                <button class="about-btn border-0">&nbsp;About Us&nbsp;</button>
            </div>
            <div class="col-md-6 p-0 m-0">
                <img width="102.6%"
                     src="{{ url('/images/rhino.png') }}"
                     alt="Rhino Image">
            </div>
        </div>
    </section>
    <section class="testimonial container-fluid bg-light">
        <div class="row w-75 m-auto mt-5">
            <div class="col-md-4 border border-top-0 d-flex flex-column">
                <i class="fas fa-chart-bar fs-3 text-center"
                   style="color:red"></i>
                <h3 class="text-center">The Market Ladder</h3>
                <ul class="list">
                    <li>Employs technical analysis to find stocks that are at a potential pivot point and buys there so that
                        losses can be minimized, while profits maximized.</li>
                    <li>Finds the best possible trades for the individual investor.</li>
                </ul>
            </div>
            <div class="col-md-4 border border-top-0 d-flex flex-column">
                <i class="fas fa-tachometer-alt fs-3 text-center"
                   style="color:red"></i>
                <h3 class="text-center">Trades</h3>
                <ul class="list">
                    <li>Trading ideas are posted regularly, take the trades you want.</li>
                    <li>Each trade is broken down into its basic components, so you know exactly when to buy, and sell.</li>
                    <li>By keeping your money in *High Profitability Trades, you have the potential to far outperform
                        standard market returns.</li>
                </ul>
            </div>
            <div class="col-md-4 border border-top-0 d-flex flex-column">
                <i class="fas fa-check fs-3 text-center"
                   style="color:green"></i>
                <h3 class="text-center">Join Now</h3>
                <ul class="fa-ul fw-bold list-unstyled">
                    <li><span class="fa-li"><i class="fas fa-hand-point-right"></i></span>Join now while prices are at
                        their lowest.</li>
                    <li><span class="fa-li"><i class="fas fa-hand-point-right"></i></span>Not sure? Start your Free 30 day
                        Trial for first time Subscribers</li>
                    <li><span class="fa-li"><i class="fas fa-hand-point-right"></i></span>Learn More about the Market
                        Ladder</li>
                </ul>
            </div>
            <div class="col-md-12">
                <ul>
                    <li>"High Profitability Trades" - Every trade has been analyzed to give a win potential of at least 2
                        times
                        the loss potential, and an expected win rate of at least 50%. Of course, no trades are guaranteed,
                        and
                        you may lose money.</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="video bg-white mt-3 py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>If You Want To See Technical Analysis In Action...</h1>
                    {{-- <iframe src="https://www.youtube.com/watch?v=nv8Wi7VM11k" width="100%" height="300">
                    </iframe> --}}
                    <div class="video" style=" border: 2px #720000 solid !important; -webkit-box-shadow: 0px 5px 38px 0px rgba(77,77,77,1); -moz-box-shadow: 0px 5px 38px 0px rgba(77,77,77,1); box-shadow: 0px 5px 38px 0px rgba(77,77,77,1) !important;">

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
    <section class="join py-5 text-center">
        <h1 class="fw-bold text-uppercase">DON'T LET YOUR MONEY GET STAGNANT, GET THE TOOLS YOU NEED TO SUCCEED!</h1>
        <a href="/join-now"
           class="join-btn">JOIN NOW</a>
    </section>


    <section class="readings">
        <div>
            <div loading="lazy"
                 onresize="resizeTile()"
                 class="reading"
                 id="reading">
                <div class="leftTile">
                    <div class="leftContent"
                         id="leftContent">
                        <div class="li">
                            <h1 class=""
                                id="li">
                                <p>Recommended Reading to get the Most of The Market Ladder:</p>
                            </h1>
                            <br>
                            <li class=" "
                                onclick="getTitle(this.id)"
                                data-question="Compounding Magic"
                                data-answer="<p><strong>A lot of types of investments have a very special “growth agent” known as Compound Interest.&nbsp; This is where the interest earned on the account adds to the principal,&nbsp; and then starts to generate its own interest.&nbsp; And the longer this process continues, the more it has the rolling snowball effect…. Hence the term&nbsp;<span class='bglGreen'>“Compounding Magic.”</span><strong><span class='bglGreen'>&nbsp;</span>&nbsp;</strong></strong></p>"
                                data-url="/compounding-magic"
                                id="listItem1"
                                style="background-color: rgba(190, 1, 1, 0.89); color: white;"> &nbsp; 1) The Compounding
                                Advantage </li>
                            <li class=" "
                                onclick="getTitle(this.id)"
                                data-question=""
                                data-answer="<p><strong><strong></strong>ETFs in simplest terms&nbsp;are a basket of stocks that track an index, sector, or other asset / investment strategy. These investments can be bought and sold on a stock exchange just like a stock.&nbsp; For example, the “SPY” ETF tracks the overall stock market/ S&amp;P 500 index, and the ETF “XLE” tracks the energy sector....&nbsp;</strong></p>"
                                data-url="/what-are-etfs"
                                id="listItem2"
                                style="background-color: inherit; color: inherit;"> &nbsp; 2) What are ETFs? </li>
                            <li class=" "
                                onclick="getTitle(this.id)"
                                data-question=""
                                data-answer="<p><strong>Here, at The Market Ladder, we like to trade inverse and Leveraged ETFs to get the greatest trading flexibility, and amplification of results, while always using careful money management methods to help protect capital.&nbsp;&nbsp;</strong><strong>&nbsp;&nbsp;</strong></p>"
                                data-url="/swing-trading-etf"
                                id="listItem3"
                                style="background-color: inherit; color: inherit;"> &nbsp; 3) Swing Trading with ETFs </li>
                        </div>
                    </div>
                </div>
                <div class="rightTile"
                     alt="the market ladder"
                     title="the market ladder">
                    <div class="rightContent"
                         id="rightContent"
                         style="height:406px">
                        <div class="li">
                            <h1 class=""
                                id="tileHead">Compounding Magic</h1>
                            <p class=""
                               id="tileBody">
                            </p>
                            <span class="tileLink p-0">
                                <a href="/compounding-magic"
                                   id="tileLink"
                                   style="color:inherit">Read full Page</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="investment-journey text-white text-center py-5">
        <h1>SWING TRADE YOUR INVESTMENTS TO NEW HEIGHTS, START YOUR JOURNEY TODAY!</h1>
        <button class="btn">&nbsp; JOIN NOW! &nbsp;</button>
    </section>
@endsection
