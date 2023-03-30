<head>
    <link rel="stylesheet"
          href={{ asset('css/join-now.css') }}>
</head>
@extends('layouts.app')

@section('title')
    {{ 'Join Now' }}
@endsection

@section('content')
    <div class="join-now-page">
        <div class="join-now-heading">
            <h1>THANKS FOR SIGNING UP WITH THE MARKET LADDER!</h1>
            <h6>Please Choose Your Subscription Level</h6>
        </div>

        <section class="membership-cards">
            <div class="container">
                <div class="row my-3 py-5">
                    <table class="membership-table table table-bordered text-center lh-base">
                        <tr class="text-white">
                            <th style="background-color:#fc630a91">BASIC PLAN</th>
                            <th style="background-color: rgba(0,41,95,.685)">PLUS PLAN</th>
                        </tr>
                        <tr>
                            <td>Stock Trades Posted Regularly</td>
                            <td>Stock Trades Posted Regulary, <strong>And</strong></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Leveraged, and Inverse ETF Trades</td>
                        </tr>
                        <tr>
                            <td><strong>>>> *Monthly Plans starting at
                                    <a href="/monthly-signup"
                                       class="text-green">just $22/month</a></strong>
                                <br><br>
                                <a href="/monthly-signup"
                                   class="text-green">Click</a>
                                to start your Monthly Subscription
                                <br><br>
                                <strong><span class="bg-warning">>>> Or Get 2 months free!</span></strong> ... *By signing up for an Annual Membership. <a href="/annual-signup" class="text-green">Click</a> to get your annual subscription of the Basic Plan at $220/year
                            </td>
                            <td><strong>>>> *Monthly Plans starting at
                                    <a href="/monthly-signup" class="text-green">just $32/month</a></strong>
                                <br><br>
                                <a href="/monthly-signup" class="text-green">Click</a> to start your Monthly Subscription
                                <br><br>
                                <strong><span class="bg-warning">>>> Or Get 2 months free!</span></strong> ... *By signing up for an Annual Subscription. <a href="/annual-signup" class="text-green">Click</a> to get your annual Subscription of the Plus Plan at $320/year
                            </td>
                        </tr>
                    </table>
                    <p><strong>*Your Credit card will be billed automatically at the end of every Month/Year until you
                            cancel. Sorry, no refunds on Monthly Subscriptios, Annual subscriptions are allowed a prorated
                            refund for all full months remaining in the subscriber's account.</strong></p>
                    <div class="border text-center mt-5 p-3">
                        <p>First time Subscriber?.. Get a 30 day Free Trial of the Plus Plan, so you can try before you buy.
                        </p>
                        <a href="/trial-signup"
                           class="text-green fw-bold" style=" font-size: 11px; padding-right: 2vw;padding-left: 2vw; padding-top: 10px;padding-bottom: 10px;
                           ">CLICK HERE FOR YOUR 30 DAY FREE
                            TRIAL</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
