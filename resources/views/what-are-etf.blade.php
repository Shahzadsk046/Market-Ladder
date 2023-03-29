<head>
    <link rel="stylesheet"
          href={{ asset('css/what-are-etf.css') }}>
</head>
@extends('layouts.app')

@section('content')
    <div class="what-are-etf-page">
        <div class="what-are-etf-heading">
            <h1>What are ETFs?</h1>
            <h6>ETFs Are Exchange Traded Funds, That Track An Index, Or Market Segment.</h6>
        </div>
    </div>
    <section class="container">
        <div class="row my-3 pt-5">
            <div class="col">
                <div class="row commonRow">
                    <div class="col-md-7 text pt-2">
                        <p>Exchange Traded Funds, or ETFs, in the simplest terms are a basket of stocks that track an index,
                            sector, or other asset / investment strategy. These investments can be bought and sold on a
                            stock exchange just like a stock. For example, the “SPY” ETF tracks the overall stock market/
                            S&P 500 index, and the ETF “XLE” tracks the energy sector. ETFs can now be found to track almost
                            anything you can imagine like gold, marijuana, 5g internet, healthcare, etc... </p>
                        <p>ETFs can also come in variations that do extraordinary things such as multiplying their daily
                            performance by 2 or 3 times their underlying index, known as "Leveraged ETFs." Or they can go
                            up, when the market goes down, known as "Inverse ETFs."</p>
                    </div>
                    <div class="col-md-5 img pt-1">
                        <img class="img-fluid"
                             src="{{ url('/images/imgETF.png') }}"
                             alt="ETF">
                    </div>
                </div>
                <div class="row commonRow">
                    <div class="col-md-5 img pt-1">
                        <img class="img-fluid"
                             src="{{ url('/images/etfChart.png') }}"
                             alt="ETF Chart">
                    </div>
                    <div class="col-md-7 text pt-2">
                        <h2>Inverse ETFs</h2>
                        <br>
                        <p>Notice how in the picture on the left, when the blue line goes up, the orange line goes down, and
                            vice versa. So, holding these inverse ETFs give gains when the "tracking instrument" fall in
                            value, but will give losses when the tracking instrument rises in value. The "tracking
                            instrument" can be just about anything these days such as Real Estate, Gold, Healthcare, or the
                            overall Stock Market. (So, if the tracking instrument goes down 1%, the inverse ETF goes up
                            about 1%.)</p>
                    </div>
                </div>

                <div class="row commonRow">
                    <div class="col-md-7 text pt-2">
                        <h2>Leveraged ETFs</h2>
                        <br>
                        <p>Leveraged ETFs will amplify the daily returns of their investment product by typically 2 times,
                            2X, or 3 times, 3X. So, for example, the ETF SOXL is designed as a “3X Bull” of Semiconductor
                            performance. So, if the price of the Semiconductor index rises 1%, SOXL will rise about 3%.
                            Needless to say, these are not for the faint of heart, and should only be traded when carefully
                            managed.</p>
                    </div>
                    <div class="col-md-5 img pt-1">
                        <img class="img-fluid"
                             src="{{ url('/images/cost3.png') }}"
                             alt="ETF Cost">
                    </div>
                </div>
                <div class="row commonRow">
                    <div class="col-md-7 text pt-2">
                        <h2>Different ETF Structures</h2>
                        <br>
                        <p>At first glance they might appear to be the same, but, ETFs come in a variety of structures including Open End Funds, Exchange Traded Notes, Unit Investment Trusts, Grantor Trusts, and Limited Partnerships. They all behave pretty similar, but do have some differences in the way they track their intended asset, and how they can be taxed.</p>
                        <p>Most of the ETFS posted trades on The Market Ladder are of the more common “Open End Fund” type, but there can be many types, including Grantor Trust, ETNs (exchange traded notes),  UITs (Unit Investment Trusts), and for tracking commodities, "Commodities Pool."</p>
                    </div>
                    <div class="col-md-5 img pt-1">
                        <img class="img-fluid"
                             src="{{ url('/images/etf apple.png') }}"
                             alt="ETF Apple">
                    </div>
                </div>
                <div class="row commonRow">
                    <div class="col-md-5 img pt-1">
                        <img class="img-fluid"
                        src="{{ url('/images/ic3.png') }}"
                        alt="ETF Tick">
                    </div>
                    <div class="col-md-7 text pt-2">
                        <h2>Getting a K-1</h2>
                        <br>
                        <p>The "Commodities Pool - Limited Partnerships"  are ETFs that track commodities, like natural gas or oil. They trade like other ETFs, but come tax time, there will be a special, "K1 Form” that needs to be filled out. Filling out a K-1 is not a terrible event, but some people will not trade any Commodity Pool/LP ETFs just to avoid the hassle of waiting for, and having to fill out another tax form, the “K-1.” (For this reason, The Market Ladder will try to make a special note of all “Commodity Pool-LP / K-1 Trades.” so you can decide whether or not to take the trade. **If you trade these within a retirement account , you won't need to worry about taxes on trades / “K-1.”)</p>
                    </div>
                </div>
                <div class="row commonRow">
                    <div class="col-md-7 text pt-2">
                        <h2>Why we believe ETFs are way better than Stocks to swing trade:</h2>
                        <br>
                        <p>
                            <ul>
                                <li>Ability to go up, when the market goes down (with Inverse ETFs)</li>
                                <li>ETFs offer an effective way to trade a specific market segment at a specific time.</li>
                                <li>Some stocks can have liquidity issues, meaning it’s hard to get in, and  out, of a trade at a price you want.  Here, at The Market Ladder, we only trade the larger well known ETFs, which should have no liquidity issues for the average investor.</li>
                                <li>Ability to maximize profits (and losses) with Leveraged ETFs in short periods of time.</li>
                                <li>An individual stock is always at risk of a big fall with the coming out of bad news regarding that company.  (Where an etf generally holds, or tracks, a lot of stocks thereby giving it more stability.)</li>
                            </ul>
                        </p>
                    </div>
                    <div class="col-md-5 img pt-1">
                        <img class="img-fluid"
                             src="{{ url('/images/hotAirBalloon.png') }}"
                             alt="Hot Air Balloon">
                    </div>
                </div>
                <div class="row commonRow">
                    <div class="col-12 text pt-2">
                        <p>This was simply a summary of ETF basics,.. If you want to dig deeper you can go to here for some good information: A more in depth explanation of ETFs is available here at <a href="https://www.investopedia.com/terms/e/etf.asp" target="_blank" class="text-link">Investopedia</a> Or, if you want to go into even greater detail, there are many good articles posted at <a href="https://www.etf.com/etf-education-center" class="text-link">ETF.com</a></p>
                        <br>
                        <p>Hope that answers your questions about ETFs,..... First time Subscribers can take a 30 day Free Trial to see what might work good for you <a href="/join-now" class="text-link" target="_blank">Join Now</a></p>
                        <br>
                        <p>** The Market Ladder does not act as an Investment Advisor. If you have any questions as to taxes, or suitability of ETF Trades, in your trading account, please seek professional advice from your Tax Attorney or Investment Advisor.</p>
                    </div>
                </div>
                <div class="row commonRow">
                    <div class="col-12">
                        <nav aria-label="...">
                            <ul class="pagination d-flex justify-content-end">
                                <li class="page-item"
                                    aria-current="page">
                                    <a class="page-link text-green"
                                       href="/swing-trading/swing-trading-with-etf">Swing Trading with ETFs &rightarrow; </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
