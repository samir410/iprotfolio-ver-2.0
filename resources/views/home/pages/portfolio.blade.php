@extends('home.main_master')
@section('title')
Protfolio page
@endsection
@section('contents')
<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">Case Study</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        @include('home.body.breadcrumb')
    </section>
    <!-- breadcrumb-area-end -->

    <!-- portfolio-area -->
    <section class="portfolio__inner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="portfolio__inner__nav">
                        <button class="active" data-filter="*">all</button>
                        <button data-filter=".cat-one">mobile apps</button>
                        <button data-filter=".cat-two">website Design</button>
                        <button data-filter=".cat-three">ui/kit</button>
                        <button data-filter=".cat-four">Landing page</button>
                    </div>
                </div>
            </div>

 
            <div class="portfolio__inner__active">
                @foreach($protfolios as $value)
                <div class="portfolio__inner__item grid-item cat-two cat-three">
                    {{-- @foreach($protfolios as $value) --}}
                    <div class="row gx-0 align-items-center">
                   
                        <div class="col-lg-6 col-md-10">
                            <div class="portfolio__inner__thumb">
                                <a href="portfolio-details.html">
                                    <img src="{{url($value->protfolio_image)}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-10">
                            <div class="portfolio__inner__content">
                                <h2 class="title"><a href="portfolio-details.html">{{ $value->short_title }}</a></h2>
                                <p>{!! $value->describtion !!}</p>
                                <a href="{{ route('home.protfolio.details',$value->id) }}" class="link">View Case Study</a>
                            </div>
                        </div>
                                        
            
                    </div>
                    {{-- @endforeach --}}
                </div>
                {{-- <div class="portfolio__inner__item grid-item cat-one cat-four">
                    <div class="row gx-0 align-items-center">
                        <div class="col-lg-6 col-md-10">
                            <div class="portfolio__inner__thumb">
                                <a href="portfolio-details.html">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio__img03.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-10">
                            <div class="portfolio__inner__content">
                                <h2 class="title"><a href="portfolio-details.html">Making 3d Illustration</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                    hidden in the middle of text</p>
                                <a href="portfolio-details.html" class="link">View Case Study</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio__inner__item grid-item cat-two">
                    <div class="row gx-0 align-items-center">
                        <div class="col-lg-6 col-md-10">
                            <div class="portfolio__inner__thumb">
                                <a href="portfolio-details.html">
                                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio__img04.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-10">
                            <div class="portfolio__inner__content">
                                <h2 class="title"><a href="portfolio-details.html">Hilon - Personal Portfolio</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                    hidden in the middle of text</p>
                                <a href="portfolio-details.html" class="link">View Case Study</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                @endforeach
            </div>

          
            <div class="pagination-wrap">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#"><i class="far fa-long-arrow-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="far fa-long-arrow-right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- portfolio-area-end -->


    <!-- contact-area -->
    <section class="homeContact homeContact__style__two">
        <div class="container">
            <div class="homeContact__wrap">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section__title">
                            <span class="sub-title">07 - Say hello</span>
                            <h2 class="title">Any questions? Feel free <br> to contact</h2>
                        </div>
                        <div class="homeContact__content">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                            <h2 class="mail"><a href="mailto:Info@webmail.com">Info@webmail.com</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="homeContact__form">
                            <form action="#">
                                <input type="text" placeholder="Enter name*">
                                <input type="email" placeholder="Enter mail*">
                                <input type="number" placeholder="Enter number*">
                                <textarea name="message" placeholder="Enter Massage*"></textarea>
                                <button type="submit">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

</main>
@endsection