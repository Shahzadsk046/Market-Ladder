<head>
    <link rel="stylesheet"
          href={{ asset('css/signup.css') }}>
</head>
@extends('layouts.app')

@section('title')
    {{ 'Sign Up' }}
@endsection

@section('content')
    <section>
        <div class="row m-0 pt-5 fixedWidth text-dgrey bg-transparent">
            <div class="col-12">
                <form action="/store"
                      method="get"
                      class="col-sm-6 mx-auto pt-0 ps-4 pe-4 pb-5 text-ddgrey bg-transparent">
                    <div class="form-row justify-content-center p-0">
                        <div class="aboutHeader">
                            <h2 class="text-uppercase text-center">Monthly Membership <a class="text-green"
                                   href="/join-now"
                                   style="font-size: x-small; font-family: 'Montserrat',sans-serif; text-transform: capitalize">&nbsp;
                                    Change ?</a></h2>
                        </div>
                        <div class="text list-unstyled">
                            <label class="pt-1 fw-semibold">Your card will be automatically billed at the end of every
                                month, until you cancel your membership. Sorry, no refunds given on the Monthly Billing
                                Plans.</label>
                        </div>
                        <input type="text"
                               name="price_id"
                               id="price_id"
                               hidden>
                        <div class="input-group text-left mt-4">
                            <label class="p-0 text-uppercase fw-bold"
                                   style="font-size:12px">First Name</label>
                            <div class="input-group text-left mt-0">
                                <input type="text"
                                       name="first_name"
                                       id="first_name"
                                       class="form-control"
                                       placeholder
                                       value
                                       required>
                            </div>
                        </div>
                        <div class="input-group text-left mt-4">
                            <label class="p-0 text-uppercase fw-bold"
                                   style="font-size:12px">Last Name</label>
                            <div class="input-group text-left mt-0">
                                <input type="text"
                                       name="last_name"
                                       id="last_name"
                                       class="form-control"
                                       placeholder
                                       value
                                       required>
                            </div>
                        </div>
                        <div class="input-group text-left mt-4">
                            <label class="p-0 text-uppercase fw-bold"
                                   style="font-size:12px">Email</label>
                            <div class="input-group text-left mt-0">
                                <input type="email"
                                       name="email"
                                       id="email"
                                       class="form-control"
                                       placeholder
                                       value
                                       required>
                            </div>
                        </div>
                        <div class="input-group text-left mt-4">
                            <label class="p-0 text-uppercase fw-bold"
                                   style="font-size:12px">Password</label>
                            <div class="input-group text-left mt-0">
                                <input type="password"
                                       name="password"
                                       id="inputPassword"
                                       class="form-control border-end-0"
                                       placeholder
                                       aria-label="Recipient's username"
                                       aria-describedby="basic-addon2"
                                       autocomplete="off"
                                       required>
                                <span class="input-group-text border-start-0"
                                      style="cursor:pointer"
                                      id="basic-addon2">
                                    <i class="fa fa-eye"
                                       onclick="showPassword()"></i>
                                </span>
                            </div>
                        </div>
                        <div class="input-group text-left mt-4 mb-4">
                            <label class="p-0 text-uppercase fw-bold"
                                   style="font-size:12px">Confirm Password</label>
                            <div class="input-group text-left mt-0">
                                <input type="password"
                                       name="password_confirmation"
                                       id="password_confirmation"
                                       class="form-control border-end-0"
                                       placeholder
                                       required>
                                <span class="input-group-text border-start-0"></span>
                            </div>
                        </div>
                        <div class="input-group text text-left mt-2 mb-4">
                            <div class="input-group text-left mt-0">
                                <label>
                                    <input type="checkbox"
                                           name="agree"
                                           id="agree"
                                           class="checkbox">
                                    I agree to the <a href="/fyi/terms"
                                       class="text-green">Terms of Service</a>.
                                </label>
                            </div>
                        </div>
                        <button type="submit"
                                class="btn btn-md btn-dark"
                                style="border-radius: 24px; padding-top: 10px; padding-bottom: 10px; padding-left:34px; padding-right:34px;">
                            <span class="text-sansSerif fw-bolder">Sign Up</span>
                        </button>
                    </div>
                </form>
                <form class="col-sm-6 mx-auto pt-0 ps-4 pe-4 pb-4 bg-transparent">
                    <div class="form-row text justify-content-center p-0">
                        <p>Already a User? <a href="/login"
                               class="text-green"> Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
