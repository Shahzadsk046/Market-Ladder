<head>
    <link rel="stylesheet"
          href={{ asset('css/swing-trading-with-etf.css') }}>
</head>
@extends('layouts.app')

@section('title') {{'Swing Trading With ETF'}} @endsection

@section('content')
    <div class="swing-trading-with-etf-page">
        <div class="swing-trading-with-etf-heading">
            <h1>SWING TRADING WITH ETF's</h1>
        </div>
        <section class="container">
            <div class="row my-3 py-5 px-3">
                <div class="col">
                    <div class="row commonRow">

                        <div class="col-12 text">
                            <p>Here, at The Market Ladder, we like to trade inverse and Leveraged ETFs to get the greatest
                                trading
                                flexibility, and amplification of results while using money management techniques to protect
                                capital.</p>
                        </div>
                    </div>

                    <div class="row commonRow">
                        <div class="col-md-7 text pt-2">
                            <p class="fs-5">
                                <br>
                                For the average Investor, we show exactly what to trade, exactly how to properly
                                buy, or get into, a trade, hold it for a number of days or weeks, and then how to
                                pproperly sell, or exit, the trade.
                                <br>
                                <br>
                                <em>There willl be always be winners and losers but the key to is have bigger
                                    winners than losers, and repeat the process over and over.</em>
                            </p>
                        </div>

                        <div class="col-md-5 img pt-1">
                            <img class="img-fluid"
                                 src="{{ url('/images/swing trading.png') }}"
                                 alt="Swing Trading">
                        </div>
                    </div>

                    <div class="row commonRow">
                        <div class="col-12 text">

                            <h3>Using only the Best ETFs with the following qualities:</h3>
                            <ul class="ps-5">
                                <li>Higher daily dollar volumes.</li>
                                <li>Lower spreads.</li>
                                <li>Lower historical "Premiums" and "Discounts" to Net Asset Value. </li>
                            </ul>

                            <div>These qualities all help to ensure the average investor will easily be able to get in and
                                out
                                of a trade at the best possible prices.</div>
                        </div>
                    </div>

                    <div class="row commonRow">
                        <div class="col-md-5 img pt-1">
                            <img class="img-fluid"
                                 src="{{ url('/images/support_resistance.png') }}"
                                 alt="Support Resistance">
                        </div>
                        <div class="col-md-7 text pt-2">
                            <h3>What kinds of patterns does The Market Ladder seek?</h3>
                            <br>
                            <br>
                            <p>
                                <strong>One of the trading patterns we look for is to buy in a "Support Zone." Notice on the
                                    adjacent picture, how price is sort of trapped on the lower end by "Support" zones and
                                    the upper end by "Resistance" zones. So buying close to this Support Zone, and selling
                                    near the top at the "Resistance" zone can work out to be a nice profitable
                                    trade.</strong>
                            </p>
                        </div>
                    </div>

                    <div class="row commonRow">
                        <div class="col-12 text">
                            <p><strong>Other key patterns traded are "Pullbacks, Overbought, and Oversold” ...... But no
                                    matter the pattern, we focus on potential "pivot points" in price action. So, the
                                    expected win rate may just 50%, but the trade will always show much more potential to
                                    the upside than downside, usually 2 times or 3 times as much. This is the one of the
                                    keys to successful swing trading.</strong></p>
                        </div>
                    </div>

                    <div class="row commonRow">
                        <div class="col-md-7 text pt-2 fw-bold">
                            <h3>What are the costs of Swing Trading with ETFs?</h3>
                            <p>
                                {{-- <strong> --}}
                            <ul>
                                <li>Just like with trading stocks there may be Trading fees / Commissions. (Many
                                    online
                                    brokers today offer commision free trading, so make sure your broker fee is
                                    acceptably
                                    low, if not free.)</li>
                                <li>**And just like stocks, trading ETFs will incur Taxes. Because we hold these
                                    instruments
                                    for less than one year, they are considered “short term gains,” and taxed as
                                    ordinary
                                    income. (However, If you are able to trade these instruments within a retirement
                                    account, your gains will not be taxed as long your money remains in your
                                    retirement
                                    account.**)</li>
                            </ul>
                            {{-- </strong> --}}
                            </p>
                        </div>
                        <div class="col-md-5 img pt-1">
                            <img class="img-fluid"
                                 src="{{ url('/images/cost2.png') }}"
                                 alt="Cost">
                        </div>

                        <div class="col-12 text pt-5">
                            <p>
                            <ul>
                                <li>Because ETFs are managed, they come with higher expense fees. The Leveraged and
                                    Inverse ETFs will have expense fees of about 1%, per year of holding. (The good
                                    news is that these fees are relatively very small in comparison to the typical
                                    price movements of the ETFs over a few days or weeks, so getting into a good
                                    trade is still the main key.)</li>
                            </ul>
                            </p>
                        </div>
                    </div>

                    <div class="row commonRow">
                        <div class="col-md-7 text pt-2">
                            <h3>What are the potential pitfalls of Swing Trading with ETFs?</h3>
                            <p>The Market Ladder looks for only the best ETFs to trade, looking for the following qualities:
                            <ul>
                                <li>With any investment, the bigger the price swings the bigger the risk, and this is
                                    certainly true with the leveraged products (where 2 times, or 3 times the "normal daily
                                    price" swings are typical!) With these leveraged products you can make bigger gains
                                    quickly, <u>and bigger losses quickly as well</u>.</li>
                                <li>Holding ETFs carries risk, and just like stocks, the ETFs may fall in value quickly.
                                    When this happens, it may be hard to get out of the trade at a decent price, even with a
                                    “Stop Loss.” (Don't assume a "stop loss" is a guaranteed "stop out price," as it will
                                    work most of the time as intended, but not always.)</li>
                            </ul>
                            </p>
                        </div>
                        <div class="col-md-5 img pt-1">
                            <img class="img-fluid"
                                 src="{{ url('/images/etf danger.png') }}"
                                 alt="ETF Danger">
                        </div>

                        <div class="col-12 text pt-5">
                            <p>
                            <ul>
                                <li>Because leveraged products are designed to achieve 2 times, or 3 times, the daily
                                    returns of their tracking target, holding for longer time frames, (i.e. several weeks )
                                    in volatile markets will usually show their gains to poorly track the original
                                    investment, and usually to the downside. This has been named "time decay" of leveraged
                                    etfs, and is a mathematical irregularity of the daily matching as it gets multiplied
                                    over longer periods of times.</li>
                                <li>ETFs can fall off their tracking products' worth, known as "Net Asset Value," or "NAV,"
                                    usually in relatively small amounts. During periods of high market volatility, these
                                    "tracking errors" can become significant, and it's best to wait for things to calm down.
                                    (This is another reason The Market Ladder will sit out the most volatile market periods
                                    when possible.)</li>
                            </ul>
                            </p>
                        </div>
                    </div>

                    <div class="row commonRow">
                        <div class="col-md-7 text pt-2">
                            <h3>What are Unsettled Funds?</h3>
                            <p>
                                Trading today is so very quick with just a click of a button, and an almost immediate
                                transaction occurs, but the money that transfers from the sale of an ETF (or stock) to
                                your account is not so fast. After an ETF(or stock) is sold it takes 2-3 days for the
                                funds to come into the account. Most brokerages will allow you to buy another ETF on
                                these “unsettled funds” as long as you do not sell that ETF before the original money
                                “settles.” If the second ETF is then sold too quickly, you will get a “Good Faith
                                Violation.” Get more than 3 of these violations in a 12 month period, and your account
                                will be restricted from buying unless you have “settled” funds. Just be aware of this,
                                so you can always have the funds to take the trade you want, and speak to your broker if
                                you have any questions as to “Settled Funds.”
                            </p>
                        </div>
                        <div class="col-md-5 img pt-1">
                            <img class="img-fluid"
                                 src="{{ url('/images/did_u_know.png') }}"
                                 alt="Did You Know">
                        </div>
                    </div>

                    <div class="row commonRow">
                        <div class="col-md-5 img pt-1">
                            <img class="img-fluid"
                                 src="{{ url('/images/tips.png') }}"
                                 alt="Quick Tips">
                        </div>
                        <div class="col-md-7 text pt-2">
                            <h3>What are tips to getting the most of Swing Trading with ETFs?</h3>
                            <p>
                            <ul>
                                <li>A new member may be tempted to jump into all current trades, but this is a bad idea
                                    since any trade advantage dissipates with time. New trades are often posted regularly,
                                    and it's always a better bet to take the new trades.</li>
                                <li>A recommended trading size would be about 15% of your portofolio, at this size you can
                                    get a good bump up in your portfolio with a winning trade, but should not take too much
                                    of a hit on a losing trade. (Don't put more than 20% of your portfolio into a trade as
                                    this would be too much concentrated risk.)</li>
                                <li>Pay attention to the posted notes on every trade... they will often provide critical
                                    information on taking the trades sucessfully.</li>
                                <li>Make sure to have your stops set on your trades as quickly as possible, (within a day
                                    after getting your trades placed.)</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                    <div class="row commonRow">
                        <div class="col-12 text pt-2">
                            <p>
                                First time Subscribers can take a 30 day Free Trial to see if The Market Ladder might
                                help you with your trading goals. -----> <a class="text-link"
                                   href="/join-now">Join Now</a>
                            </p>
                            <br>
                            <p>
                                <em>
                                    ** The Market Ladder is not an Investment Advisor or professional Tax Advisor. If you
                                    have
                                    any questions as to the appropriateness of the ETFs, or trading such in your investment
                                    account, please seek professional advice from your Tax Attorney or Investment Advisor.
                                </em>
                            </p>
                        </div>
                    </div>
                    <div class="row commonRow">
                        <div class="col-12">
                            <nav aria-label="...">
                                <ul class="pagination d-flex justify-content-end">
                                    <li class="page-item"
                                        aria-current="page">
                                        <a class="page-link text-green" href="/about/about">About The Market Ladder &rightarrow; </a>
                                    </li>
                                </ul>
                            </nav>
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



























    </div>
@endsection
