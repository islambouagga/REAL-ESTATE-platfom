@extends('layouts.avam')

@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section spad set-bg" data-setbg="{{asset('img/breadcrumb-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h4>Property Submit</h4>
                        <div class="bt-option">
                            <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                            <span>Property</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <!-- Property Details Section Begin -->
    <section class="property-details-section">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="pd-text">
                        <div class="row">
                            <div class="col-lg-6 mt-5">
                                <div class="pd-title">
                                    <div class="pt-price">DZ{{$offer->prix}}</div>
                                    <h3>Home in Merrick Way</h3>
                                    <p><span class="icon_pin_alt"></span>{{$offer->address}}</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="pd-social">
                                    <form role="form" method="post"
                                          action="{{route('myByOffer.store')}}">
                                        @csrf
                                        <input type="hidden" name="offerid" value="{{$offer->id}}">
                                        <input type="hidden" name="userid" value="{{Auth::id()}}">
                                    <button type="submit" class="btn"><i class="fa fa-heart"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="pd-board">
                            <div class="tab-board">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Overview</a>
                                    </li>
                                </ul><!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                        <div class="tab-details">
                                            <ul class="left-table">
                                                <li>
                                                    <span class="type-name">Property ID</span>
                                                    <span class="type-value">#{{$offer->id}}</span>
                                                </li>
                                                <li>
                                                    <span class="type-name">Price</span>
                                                    <span class="type-value">DZ {{$offer->prix}}</span>
                                                </li>
                                            </ul>
                                            <ul class="right-table">
                                                <li>
                                                    <span class="type-name">Home Avam</span>
                                                    <span class="type-value">{{$offer->surfface}} m²</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Property Details Section End -->


{{--        <h1>offer adderss :  {{$offer->address}}</h1>--}}
{{--        <h1>offer prix :  {{$offer->prix}}</h1>--}}
{{--        <h1>offer  surfface :  {{$offer->surfface}}</h1>--}}
{{--        <h1>offer  statu :  {{$offer->statu}}</h1>--}}
{{--        @foreach($offer->createByUser()->get() as $e)--}}
{{--            <h1>{{$e->name}}</h1>--}}
{{--        @endforeach--}}
{{--        <a class="btn btn-success" href="{{route('offer.edit',$offer->id)}}">Edit</a>--}}
@endsection
