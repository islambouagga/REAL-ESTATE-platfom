@extends('layouts.aler')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section spad set-bg" data-setbg="{{asset('img/breadcrumb-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h4>Property Grid</h4>
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
    <!-- Property Section Begin -->
    <section class="property-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h4>PROPERTY Grid</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($offers as $offer )
                <div class="col-lg-4 col-md-6">
                    <div class="property-item">
                        <div class="pi-pic set-bg" data-setbg="{{asset('uploads/offers/'.$offer->image)}}">

                        </div>
                        <div class="pi-text">
                            <form role="form" method="post"
                                  action="{{route('myByOffer.store')}}">
                                @csrf
                                <input type="hidden" name="offerid" value="{{$offer->id}}">
                                <input type="hidden" name="userid" value="{{Auth::id()}}">
                                <button type="submit" class="heart-icon btn"><span class="icon_heart_alt"></span></button>
                            </form>
                            <div class="pt-price">$ {{$offer->prix}}</div>
                            <h5><a href="{{route('offer.show',$offer->id)}}">Home in Merrick Way</a></h5>
                            <p><span class="icon_pin_alt"></span> {{$offer->address}}</p>
                            <ul>
                                <li><i class="fa fa-object-group"></i> 2, 283</li>
                                <li><i class="fa fa-bathtub"></i> 03</li>
                                <li><i class="fa fa-bed"></i> 05</li>
                                <li><i class="fa fa-automobile"></i> 01</li>
                            </ul>
                            <div class="pi-agent">
                                <div class="pa-item">
                                    <div class="pa-info">
                                        <h6>{{$offer->createByUser->nom}} {{$offer->createByUser->prenom}}</h6>
                                    </div>
                                    <div class="pa-text">
                                        123-455-688
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
    <!-- Property Section End -->

@endsection
