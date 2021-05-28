@extends('layouts.aler')

@section('content')




    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section spad set-bg" data-setbg="{{asset('img/breadcrumb-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h4>Apartment Edit</h4>
                        <div class="bt-option">
                            <a href="/"><i class="fa fa-home"></i> Home</a>
                            <span>Apartment Edit</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Property Submit Section Begin -->
    <section class="property-submit-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="property-submit-form">
                        <form method="POST" action="{{ route('appartement.update',$appartement->id) }}">
                            @method('PATCH')
                            @csrf
                            @foreach($appartement->offers as $offer)
                            <div class="pf-title">
                                <h4>Title</h4>
                                <input type="text" placeholder="Your Title*">
                            </div>
                            <div class="pf-location">
                                <h4>Property Location</h4>
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $offer->address}}" required autocomplete="address" autofocus>

                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="pf-feature-price">
                                <h4>Featured Price</h4>
                                <div class="fp-inputs">
                                    <input id="prix" type="text" class="form-control @error('prix') is-invalid @enderror" name="prix" value="{{ $offer->prix }}" required autocomplete="prix" autofocus>

                                    @error('prix')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <input type="hidden" name="offertable_type" value="Appartement">
                            <div class="pf-feature-image">
                                <h4>Featured Image</h4>
                                <div class="feature-image-content"></div>
                            </div>
                            <div class="pf-property-details">
                                <h4>Property details</h4>
                                <div class="property-details-inputs">
                                    <input type="text" name="surfface"  value="{{ $offer->surfface }}">
                                    <input type="text" name="balcon" value="{{ $appartement->balcon }}">
                                    <input type="text" name="chombre" value="{{ $appartement->chombre }}" >
                                    <input type="text" name="salledebain" value="{{ $appartement->salledebain }}">
                                    <input type="text" name="etage"   value="{{ $appartement->etage }}" >
                                    <input type="text" name="toilettes" value="{{ $appartement->toilettes }}">
                                    <input type="text" name="cuisine"  value="{{ $appartement->cuisine }}">
                                </div>
                                <button type="submit" class="site-btn">Submit Property</button>
                            </div>
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Property Submit Section End -->
@endsection
