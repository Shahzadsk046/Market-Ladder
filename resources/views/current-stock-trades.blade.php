<head>
    <link rel="stylesheet" href={{ asset('css/current-stock.css') }}>
</head>
@extends('layouts.app')

@section('title') {{'Current Stock Trades'}} @endsection

@section('content')
    {{-- <h1>Current Stock Trades</h1> --}}
    <div class="current-stock-page">

        <div class="current-stock-heading">
            <h1>Current Stock Trades</h1>
        </div>

        <section class="stock-table">
            <div class="container">
                <div class="row text-center my-3 p-4">
                    <p class="pb-4">
                        *Please watch the short video on <strong class="text-success">Taking the Trades</strong>, if not
                        already..
                    </p>
                    <table class="border border-dark table-bordered text-center">
                        <tr>
                            <th>Date</th>
                            <th>Stock</th>
                            <th>Company</th>
                            <th>Buy at</th>
                            <th>Max Hold Time</th>
                            <th class="bg-pink">Stop Loss / %</th>
                            <th class="bg-parrot-light bg-opacity-50">Take Profit / %</th>
                            <th>Joel to Buy</th>
                            <th>Additional Notes</th>
                        </tr>
                        <tr>
                            <td>21.21</td>
                            <td>AAPL</td>
                            <td>Apple</td>
                            <td>1 4 days</td>
                            <td>15 days</td>
                            <td>441.2-3.3%</td>
                            <td>1 7.8%</td>
                            <td>no</td>
                            <td>None</td>
                        </tr>
                    </table>

                </div>
                <span class="bg-gray">Expired, no trade >>> Dark Grey</span>
                <br>
                <span class="bg-beige">Trade Completed - Beige</span>
                <br>
                <span>**Active - White</span>
                <br>
                <span>(**To be updated as possible, please expect delays in updating the most recent changes)</span>

            </div>
        </section>


    </div>
@endsection
