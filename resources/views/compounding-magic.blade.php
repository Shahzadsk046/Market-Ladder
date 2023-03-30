<head>
    <link rel="stylesheet" href={{ asset('css/compound-magic.css') }}>
</head>
@extends('layouts.app')

@section('title') {{'Compounding Magic'}} @endsection

@section('content')
    <div class="compounding-page">
        <div class="compounding-heading">
            <h1>COMPOUNDING MAGIC</h1>
        </div>

        <section class="saving-more">
            <div class="container">
                <div class="row my-3 py-5">
                    <p>Everyone should be saving for their own personal retirement... <strong>By saving more now, getting a
                            great interest rate, and letting it grow over time, makes a small amount today grow into a very
                            signifcant amount tomorrow.</strong></p>

                    <div class="col-md-8 py-5">
                        <p>A lot of types of investments have a very special "growth agent" known as Compound Interest. This
                            is where the interest earned on the account adds to the principal. and then starts to generate
                            its own interest. And the longer this process continues, the more it has the rolling snwball
                            effect.... Hence the term <strong style=" background-color:lightgreen">"Compounding
                                Magic."</strong></p>
                        <br><br>

                        <p>This is similar to successful swing trading of stocks, because gains made here can immediately be
                            used to make new purchases, and hopefully make more gains, so the gains are additive/compounded.
                        </p>
                    </div>
                    <div class="col-md-4 py-3">
                        <img width="100%" src="{{ url('/images/goal.png') }}" alt="Goal Performance">
                    </div>
                </div>
            </div>
        </section>
        <section class="compound-data">
            <div class="container">
                <div class="row my-3 py-5">
                    <div class="col-md-5">
                        <img width="100%" src="{{ url('/images/goal.png') }}" alt="Goal Performance">
                    </div>
                    <div class="col-md-7">
                        <table class="compound-table table-bordered">
                            <tr>
                                <td rowspan="7"><strong>Take a look at this table showing how long to <u>Double your $$$
                                            Investment</u> with Compound Interest:</strong><br>---> The average stock market
                                    returns have historically averaged about <span class="bg-info text-white">10% per
                                        year</span>, but, if you are able
                                    to do better than 10%, notice how the "Compounding Magic" really kicks in at <span
                                        class="bg-danger bg-opacity-25">20%
                                        or more</span>.</td>
                                <th>Percent Return</th>
                                <th>Years to Double Investment</th>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>14.2</td>
                            </tr>
                            <tr class="bg-primary bg-opacity-25">
                                <td>10</td>
                                <td>7.3</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>5.0</td>
                            </tr>
                            <tr class="bg-danger bg-opacity-25">
                                <td>20</td>
                                <td>3.8</td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>3.1</td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td>2.6</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row my-3 py-5">

                    <div class="col-md-7">
                        <table class="compound-table table-bordered">
                            <tr>
                                <td rowspan="7"><strong>Here's another way to look at it....</strong><br>Say you invest
                                    $5,000 in an investment account with compound interest, and then add $100 every month,
                                    for the next 20 years. Here's what you would end up with after 20 years, at different
                                    interest rates, with "Compounding Magic" at work.</td>
                                <th>Interest Rate</th>
                                <th>Value at 20 Years</th>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>$54,800</td>
                            </tr>
                            <tr class="bg-primary bg-opacity-25">
                                <td>10</td>
                                <td>$113,100</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>$249,600</td>
                            </tr>
                            <tr class="bg-danger bg-opacity-25">
                                <td>20</td>
                                <td>$577,500</td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>$1,379,500</td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td>$3.364,400</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-5">
                        <img width="100%" src="{{ url('/images/goal.png') }}" alt="Goal Performance">
                    </div>
                </div>
            </div>
        </section>

        <section class="are-you-ready">
            <div class="container">
                <div class="row my-3 py-5">
                    <p>Hopefully, you understand the point that investing now, and getting a great return has a big impact
                        on the amount of money you can grow over time. Of course taxes can take a big chunk out of your
                        gains/returns, so the best way to Swing Trade Stocks is in a retirement account, where gains are not
                        taxed (immediately), and allowed to grow (until taken out.)</p>
                    <p><strong>*The Market Ladder's goal is to help customers maximize their investment returns, but can not
                            guarantee any specific levels of return.</strong></p>
                    <br>
                </div>
                <div class="row commonRow">
                    <div class="col-12">
                        <nav aria-label="...">
                            <ul class="pagination d-flex justify-content-end">
                                <li class="page-item"
                                    aria-current="page">
                                    <a class="page-link text-green"
                                       href="/join-now">Swing Trading with Stocks &nbsp; &rightarrow; </a>
                                </li>
                            </ul>
                        </nav>
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
