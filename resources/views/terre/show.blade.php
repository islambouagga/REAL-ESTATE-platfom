@extends('layouts.aler')

@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section spad set-bg" data-setbg="{{asset('img/breadcrumb-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h4>piece of ground Details</h4>
                        <div class="bt-option">
                            <a href="/"><i class="fa fa-home"></i> Home</a>
                            <span>piece of ground</span>
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
                @foreach($terre->offers as $offer)
                <div class="col-lg-12 ">
                    <div class="pd-text">
                        <div class="row">
                            <div class="col-lg-6 mt-5">
                                <div class="pd-title">
                                    <div class="pt-price">$ {{$offer->prix}}</div>
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
                                        <a href="{{route('terre.edit',$terre->id)}}"><i class="fa fa-edit"></i></a>
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
                                                    <span class="type-name">Price</span>
                                                    <span class="type-value">$ {{$offer->prix}}</span>
                                                </li>
                                            </ul>
                                            <ul class="right-table">
                                                <li>
                                                    <span class="type-name">Home Area</span>
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
                @endforeach
            </div>
        </div>
    </section>
    <!-- Property Details Section End -->
@endsection
