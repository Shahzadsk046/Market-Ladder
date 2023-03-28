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
                    <div class="row commonRow my-3 py-5">
                        <div class="col text pt-2 bg-transparent">
                            <div class="aboutBody">
                                <h1>Hello!</h1>
                                <h5>My name is Joel Smith, and I am the *Chief Market Technician here at The Market Ladder.
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="row commonRow my-3 py-3">
                        <div class="col-md-7 text">
                            <div class="aboutBody">
                                <p>
                                    <br>
                                </p>
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
                                        have spent years in self study, analyzing stock charts, reading books, testing
                                        various patterns, and so forth.
                                    </strong>
                                </p>

                            </div>
                        </div>
                        <div class="col-md-5 img">
                            <img class="img-fluid"
                                 src="{{ url('/images/founder.jpg') }}"
                                 alt="The Market Ladder Founder"
                                 title="The Market Ladder">
                        </div>
                    </div>
                    <div class="row commonRow my-3 py-3">
                        <div class="col text">
                            <div class="aboutBody">
                                <p>
                                    <strong>And, I found the best, most practical use of my skills, is by Swing Trading....
                                        done properly, you can be wrong 50% of the time and still make money! </strong>
                                </p><br>
                                <p>
                                    <strong>
                                        Swing trading is different than predicting a market direction and then adjusting
                                        your portfolio to be "in" or "out of the market," which is considerably more
                                        difficult, and will often times end up losing money. I will, however, still analyze
                                        the overall market, and then look for bullish (market going up) or bearish (market
                                        going down) setups. I do this because most ETFs will still "follow" the market's
                                        direction to some degree, and it's good to know if you're in trading in "headwinds"
                                        or "tailwinds."
                                    </strong>
                                </p><br>
                                <p>
                                    <strong>
                                        When I am not in front of the computer, I enjoy playing tennis, or spending time
                                        with my wife, and our 3 furry cats. (One of which decided to help me with a picture
                                        today :-)
                                    </strong>
                                </p><br>
                                <p>
                                    <strong>
                                        Thanks for stopping by,.. I hope you’ll want to give The Market Ladder a try...
                                        <a href="/join-now"
                                           target="_blank"
                                           class="text-green">
                                            Join Now
                                        </a>
                                    </strong>
                                </p>
                                <br>
                                <p>
                                    <strong>
                                        <em>*Please Note: I am not a registered Financial Advisor, or Investment
                                            Analyst</em>
                                    </strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
