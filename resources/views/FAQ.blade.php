<head>
    <link rel="stylesheet" href={{ asset('css/faq.css') }}>
</head>

@extends('layouts.app');

@section('content')

<div class="faq-page">
    <div class="faq-heading">
        <h1>FAQ</h1>
        <h6>Questions And Answers</h6>
    </div>

    <section class="faqs">
        <div class="container">
            <div class="row my-3 py-5">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header w-100 collapsed me-auto" id="questionOne">
                            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            {{-- <i class="fas fa-plus-square pe-4"></i> --}}
                            Question No 1
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="questionOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </section>


























</div>

@endsection
