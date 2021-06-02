@extends('layouts.aler')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section spad set-bg" data-setbg="{{asset('img/breadcrumb-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h4>Apartments Grid</h4>
                        <div class="bt-option">
                            <a href="/"><i class="fa fa-home"></i> Home</a>
                            <span>Apartment</span>
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
                        <h4>Apartments Grid</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($appartements as $app )
                    @foreach($app->offers as $offer)
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item">
                                <div class="pi-pic set-bg" data-setbg="{{asset('img/property/property-1.jpg')}}">

                                </div>
                                <div class="pi-text">
                                    <form role="form" method="post"
                                          action="{{route('myByOffer.store')}}">
                                        @csrf
                                        <input type="hidden" name="offerid" value="{{$offer->id}}">
                                        <input type="hidden" name="userid" value="{{Auth::id()}}">
                                        <button type="submit" class="heart-icon btn"><span
                                                class="icon_heart_alt"></span></button>
                                    </form>
                                    <div class="pt-price">$ {{$offer->prix}}</div>
                                    <h5><a href="{{route('appartement.show',$app->id)}}">{{$offer->title}}</a></h5>
                                    <p><span class="icon_pin_alt"></span> {{$offer->address}}</p>
                                    <ul>
                                        <li><i class="fa fa-object-group"></i>{{$offer->surfface}}</li>
                                        <li><i class="fa fa-bathtub"></i> {{$app->salledebain}}</li>
                                        <li><i class="fa fa-bed"></i> {{$app->chombre}}</li>
                                    </ul>
                                    <div class="pi-agent">
                                        <div class="pa-item">
                                            <div class="pa-info">
                                                <h6>{{$offer->createByUser->nom}} {{$offer->createByUser->prenom}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
    <!-- Property Section End -->

@endsection
