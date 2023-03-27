<head>
    <link rel="stylesheet"
          href={{ asset('css/founder.css') }}>
</head>
@extends('layouts.app')

@section('content')
    <div class="founder-page">
        <div class="founder-heading">
            <h1>JOEL'S STORY</h1>
            <h6>About The Founder</h6>
        </div>

        <div class="container">
            <div class="row text-dgrey">
                <div class="col-12">
                    <div class="commonRow">
                        <div class="col text newDesign pt-2 bg-transparent">
                            <div class="aboutBody">
                                <h1>Hello!</h1>
                                <h5>My name is Joel Smith, and I am the *Chief Market Technician here at The Market Ladder.
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row commonRow my-3 py-5">
                <div class="col-md-7 text pt-2">
                    <div class="aboutBody">
                        <p>
                            <strong>
                                I have worked in the plastics industry as a process engineer after achieving a
                                bachelor’s degree in mechanical engineering from North Carolina State University.
                            </strong>
                        </p>
                        <br>
                        <br>
                        <p>
                            <strong>
                                For me, the fascination with technical analysis all started back in 2012 when
                                I went to a training class offered at a local stock traders business. While
                                the class was not much more than a sales pitch, it did spark an interest in me to
                                really understand technical analysis of the stock market. And, since then, I
                                have spent years in self study, analyzing stock charts, reading books, testing various
                            </strong>
                        </p>

                    </div>
                </div>
                <div class="col-md-5 img pt-1">
                    <img class="img-fluid"
                         src="{{ url('/images/founder.jpg') }}"
                         alt="The Market Ladder Founder"
                         title="The Market Ladder">
                </div>

            </div>
        </div>
    @endsection
