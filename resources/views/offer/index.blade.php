@extends('layouts.avam')

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
                            <div class="row">
                                @if($offer->statu != 'accepter')
                            <form role="form" method="post"
                                  action="{{route('offer.accepter',$offer->id)}}">
                                @method('PATCH')
                                @csrf
                                <button class="btn"><i
                                        class="fa fa-check" style="color: green"></i></button>
                            </form>
                                @endif
                                    @if($offer->statu != 'rejeter')
                            <form role="form" method="post"
                                  action="{{route('offer.rejeter',$offer->id)}}">
                                @method('PATCH')
                                @csrf
                                <button class="btn"><i
                                        class="fa fa-times"></i></button>
                            </form>
                                    @endif
                            <form role="form" method="post"
                                  action="{{route('offer.destroy',$offer->id)}}">
                                @method('DELETE')
                                @csrf
                                <button class="btn"><i
                                            class="fa fa-trash" style="color: red"></i></button>
                            </form>
                            </div>
                            <div class="pt-price">DZ {{$offer->prix}}</div>
                            <h5><a href="{{route('offer.show',$offer->id)}}">{{$offer->title}}</a></h5>
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
