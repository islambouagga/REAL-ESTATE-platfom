@extends('layouts.aler')

@section('content')
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="hs-slider owl-carousel">
                @foreach($offers as $offer )
                <div class="hs-item set-bg" data-setbg="{{asset('uploads/offers/'.$offer->image)}}">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hc-inner-text">
                                <div class="hc-text">
                                    <h4>{{$offer->title}}</h4>
                                    <p><span class="icon_pin_alt"></span> {{$offer->address}}</p>

                                    <h5>$ {{$offer->prix}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Property Section Begin -->
    <section class="property-section latest-property-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title">
                        <h4>Latest PROPERTY</h4>
                    </div>
                </div>
            </div>
            <div class="row property-filter">
                @foreach($offers6 as $offer)
                <div class="col-lg-4 col-md-6 ">
                    <div class="property-item">
                        <div class="pi-pic set-bg" data-setbg="{{asset('uploads/offers/'.$offer->image)}}">
                        </div>
                        <div class="pi-text">
                            <div class="pt-price">$ {{$offer->prix}}</div>
                            <h5><a href="#">{{$offer->title}}</a></h5>
                            <p><span class="icon_pin_alt"></span> {{$offer->address}}</p>
                            <ul>
                                <li><i class="fa fa-object-group"></i>{{$offer->surfface}} M²</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Property Section End -->

    <!-- Chooseus Section Begin -->
    <section class="chooseus-section spad set-bg" data-setbg="img/chooseus/chooseus-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="chooseus-text">
                        <div class="section-title">
                            <h4>Why choose us</h4>
                        </div>
                        <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="chooseus-features">
                        <div class="cf-item">
                            <div class="cf-pic">
                                <img src="img/chooseus/chooseus-icon-1.png" alt="">
                            </div>
                            <div class="cf-text">
                                <h5>Find your future home</h5>
                                <p>We help you find a new home by offering a smart real estate.</p>
                            </div>
                        </div>
                        <div class="cf-item">
                            <div class="cf-pic">
                                <img src="img/chooseus/chooseus-icon-2.png" alt="">
                            </div>
                            <div class="cf-text">
                                <h5>Buy or rent homes</h5>
                                <p>Millions of houses and apartments in your favourite cities</p>
                            </div>
                        </div>
                        <div class="cf-item">
                            <div class="cf-pic">
                                <img src="img/chooseus/chooseus-icon-3.png" alt="">
                            </div>
                            <div class="cf-text">
                                <h5>Experienced agents</h5>
                                <p>Find an agent who knows your market best</p>
                            </div>
                        </div>
                        <div class="cf-item">
                            <div class="cf-pic">
                                <img src="img/chooseus/chooseus-icon-4.png" alt="">
                            </div>
                            <div class="cf-text">
                                <h5>List your own property</h5>
                                <p>Sign up now and sell or rent your own properties</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Chooseus Section End -->

    <!-- Feature Property Section Begin -->
    <section class="feature-property-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 p-0">
                    <div class="feature-property-left">
                        <div class="section-title">
                            <h4>Feature PROPERTY</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 p-0">
                    <div class="fp-slider owl-carousel">
                        @foreach($randomOffers as $offer)
                        <div class="fp-item set-bg" data-setbg="{{asset('uploads/offers/'.$offer->image)}}">
                            <div class="fp-text">
                                <h5 class="title">{{$offer->title}}</h5>
                                <p><span class="icon_pin_alt"></span>{{$offer->address}}</p>
                                <h5>$ {{$offer->prix}}</h5>
                                <ul>
                                    <li><i class="fa fa-object-group"></i>{{$offer->surfface}} M²}</li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Property Section End -->
@endsection
