<head>
    <link rel="stylesheet" href={{ asset('css/home.css') }}>
</head>
@extends('layouts.app')



@section('content')
    <div class="m-0 p-0 container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-0">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div style="position: relative; left:0; top:0;">
                    <img class="ladder" src="{{ url('/images/ladder.png') }}" width="100%" alt="Ladders">
                    <img class="logo" src="{{ url('/images/logo.png') }}" width="20%" alt="Logo">
                    <p class="text-image">Swing Trade <br>Your Investments <br>to New Heights!</p>
                </div>
            </div>
        </div>
    </div>
@endsection
