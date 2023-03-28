<head>
    <link rel="stylesheet"
          href={{ asset('css/current-etf.css') }}>
</head>
@extends('layouts.app')

@section('content')
    <div class="current-etf-page">
        <div class="current-etf-heading">
            <h1>CURRENT ETF TRADES</h1>
        </div>

        <section class="container">
            <div class="row my-3 py-5">
                <div class="col-md-12">
                    <p>
                        <strong>&rightarrow; Status to be updated typically Bi-Weekly. Scroll down to view previous
                            postings.</strong>
                        <br>
                        <strong>&rightarrow; A Full position size is generally recommended at 15% of your portfolio, but you
                            can trade more or less that suits your trading needs.</strong>
                        <br>
                        <strong><em>&rightarrow; (For our new clients, its best to wait for new trades to occur, rather than
                                jumping into current positions.)</em></strong>
                        <br><br><br>
                    </p>

                </div>
            </div>
            <div class="row my-3 py-5">
                <div class="col-md-12">
                    <p>
                        <strong>
                            ******* THE FOLLOWING ARE FOR EXAMPLES ONLY, DO NOT TRADE *******
                        </strong>
                    </p>
                </div>
            </div>
            <div class="row my-3 py-5">
                <div class="col-md-12">
    <img class="w-100 img-fluid mb-3 pb-5" src="{{url('/images/new-trades-table.png')}}" alt="New Trades">

    <img class="w-100 img-fluid my-3 py-5" src="{{url('/images/current-position-table.png')}}" alt="New Trades">
    <img class="w-100 img-fluid mt-3 pt-5" src="{{url('/images/past-trades-table.png')}}" alt="New Trades">
    {{-- <table class="table caption-top table-bordered text-center">
                            <span class="d-inline bg-dark">
                                <caption class="tab-caption">New Trades 11/5</caption>
                            </span>
                            <tr>
                                <th>ETF</th>
                                <th>Description</th>
                                <th class="light-blue">Buy AT</th>
                                <th class="light-pink">Stop Loss</th>
                                <th class="light-green">Profit Target</th>
                                <th>Notes</th>
                            </tr>
                            <tr>
                                <th>SPXU</th>
                                <td>3X BEAR SP500</td>
                                <td class="light-blue">Full Size 85.4</td>
                                <td class="light-pink">Full Size 83.9</td>
                                <td class="light-green">1/2 size = 88.8 1/2 size = 92.2</td>
                                <td>Market is reaching a key resistance area, also a bit overextended. Set stops quickly as
                                    possible, down markets more quickly.</td>
                            </tr>
                            <tr>
                                <th>BOIL</th>
                                <td>NAT GAS 3X BULL</td>
                                <td class="light-blue">Full size 75.0</td>
                                <td class="light-pink">Full size 73.0</td>
                                <td class="light-green">Full Size 80</td>
                                <td>"BOIL is a 'Commodity Pool' ETF and will gget a 'K-1'" at tax time. Boil is a very
                                    aggressive trade, recommended to take just half of the normal trade size.</td>
                            </tr>
                        </table> --}}

                </div>
            </div>
        </section>

































    </div>
@endsection
