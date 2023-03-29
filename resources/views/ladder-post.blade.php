<head>
    <link rel="stylesheet"
          href={{ asset('css/ladder-post.css') }}>
</head>
@extends('layouts.app')

@section('title') {{'The Ladder Post'}} @endsection

@section('content')
    <div class="ladder-post-page">
        <div class="ladder-post-heading">
            <h1>The Ladder's Post</h1>
        </div>
        <section class="container">
            <div class="row my-3 pt-3">
                <div class="col">
                    <div class="row commonRow">
                        <div class="col-md-12 text">
                            <h3>Hello All New Members!</h3>
                            <br>
                            <p>This is the Grand Opening of The Market Ladder!</p>
                            <br>
                            <p>-- be sure to check back here for any new updates or notes as they come up.</p>
                            <br>
                            <p>Thanks, Joel</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
