<head>
    <link rel="stylesheet"
          href={{ asset('css/contact.css') }}>
</head>
@extends('layouts.app')

@section('content')
    <div class="contact-page">
        <div class="contact-heading">
            <h1>CONTACT US</h1>
            <h6>Do You Have Any Questions Or Comments?</h6>
        </div>

        <div class="container">
            <div class="row my-3 py-5 contact-body">
                <div class="col-md-12 pl-0 d-flex justify-content-center">
                    <h3 style="font-size: 1.5rem">Feel free To Contact Us</h3>
                </div>
                <div class="col-md-8 p-2 bg-transparent">
                    <form action=""
                          method="get"
                          class="p-0 pt-2 text-sansSerif text-dddgrey">
                        <div class="row">
                            <div class="form-group my-3 col-sm-6">
                                <input class="form-control"
                                       type="text"
                                       name="name"
                                       id="name"
                                       placeholder="Name"
                                       required />
                            </div>
                            <div class="form-group my-3 col-sm-6">
                                <input class="form-control"
                                       type="email"
                                       name="email"
                                       id="email"
                                       placeholder="Email"
                                       required />
                            </div>
                            <div class="form-group my-3 col-sm-6">
                                <input class="form-control"
                                       type="text"
                                       name="subject"
                                       id="subject"
                                       placeholder="Subject"
                                       required />
                            </div>
                            <div class="form-group my-3 col-sm-6">
                                <input class="form-control"
                                       type="number"
                                       name="phone"
                                       id="phone"
                                       placeholder="Phone"
                                       required />
                            </div>
                            <div class="form-group my-3 col-sm-12 p-0">
                                <textarea name="message"
                                          id="message"
                                          class="form-control"
                                          placeholder="Your Message Here..."
                                          style="height: 140px; resize:none;"></textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-sm btn-contact text-uppercase
                             p-0">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
@endsection
