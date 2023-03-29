<head>
    <link rel="stylesheet"
          href={{ asset('css/performance.css') }}>
</head>
@extends('layouts.app')

@section('title') {{'Performance'}} @endsection

@section('content')
    <div class="performance-page">
        <div class="performance-heading">
            <h1>PERFORMANCE</h1>
        </div>
        <section class="container">
            <div class="row my-3 py-3">
                <div class="col">
                    <div class="row commonRow">
                        <div class="col-12 text pt-2">
                            <p>
                                * All trades will be summarized for monthly, or bi-monthly, performance. And, in the near
                                future, a longer term report will be added as the data comes in. (Gains do not include
                                taxes, commissions, "slippages", and other possible trading costs.)
                            </p>
                            <br>
                            <br>
                            <p>
                                <em class="bg-pink">
                                    * " My personal goal is for every year to have an annual performance of 50% or more.
                                    This is a lofty goal I keep to inspire me, and get the most for my clients. It is not a
                                    guarantee, but, with a lot of due diligence, and a little luck, it's doable. - Thx,
                                    Joel"
                                </em>
                            </p>
                            <br>
                            <br>
                        </div>
                    </div>
                    <div class="row commonRow">
                        <div class="col-12 text pt-2">
                            <h3>November - December 2022</h3>
                            <p>("Please excuse the break in performance data, trades were stopped Mid-December as I needed
                                to focus on finishing the website. I have started to look for potential good trades now as
                                of 3.26.23, and will have more performance data soon Thx, Joel")</p>
                        </div>
                        <div class="col-12 img pt-1">
                            <img src="{{ url('/images/performance-dashboard.png') }}"
                                 alt="Performance Dashboard"
                                 class="img-fluid h-100 w-100">
                        </div>
                    </div>
                    <div class="row commonRow">
                        <div class="col-12 text pt-2">
                            <p>
                                *There are no performance guarantees, and past performance is no guarantee of future
                                results.
                            </p>
                        </div>
                    </div>
                    <div class="row commonRow">
                        <div class="col-12">
                            <nav aria-label="...">
                                <ul class="pagination d-flex justify-content-end">
                                    <li class="page-item"
                                        aria-current="page">
                                        <a class="page-link text-green"
                                           href="/about/about-founder">About The Founder &rightarrow; </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="investment-journey text-white text-center py-5">
            <h1>SWING TRADE YOUR INVESTMENTS TO NEW HEIGHTS, START YOUR JOURNEY TODAY!</h1>
            <button class="btn">&nbsp; JOIN NOW! &nbsp;</button>
        </section>
    </div>
@endsection
