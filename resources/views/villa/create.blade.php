@extends('layouts.aler')

@section('content')




    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section spad set-bg" data-setbg="{{asset('img/breadcrumb-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h4>Villa Submit</h4>
                        <div class="bt-option">
                            <a href="/"><i class="fa fa-home"></i> Home</a>
                            <span>Villa Submit</span>
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
                        <form method="POST" action="{{ route('villa.store') }}">
                            @csrf
                            <div class="pf-title">
                                <h4>Title</h4>
                                <input type="text" placeholder="Your Title*">
                            </div>
                            <div class="pf-location">
                                <h4>Property Location</h4>
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="pf-feature-price">
                                <h4>Featured Price</h4>
                                <div class="fp-inputs">
                                    <input id="prix" type="text" class="form-control @error('prix') is-invalid @enderror" name="prix" value="{{ old('prix') }}" required autocomplete="prix" autofocus>

                                    @error('prix')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <input type="hidden" name="offertable_type" value="villa">
                            <div class="pf-feature-image">
                                <h4>Featured Image</h4>
                                <div class="feature-image-content"></div>
                            </div>
                            <div class="pf-property-details">
                                <h4>Property details</h4>
                                <div class="property-details-inputs">
                                    <input type="text" name="surfface" placeholder="Area Size">
                                    <input type="text" name="balcon" placeholder="Balconies">
                                    <input type="text" name="chombre" placeholder="Bedrooms">
                                    <input type="text" name="salledebain" placeholder="Bathrooms">
                                    <input type="text" name="etage" placeholder="Floors">
                                    <input type="text" name="toilettes" placeholder="WC">
                                    <input type="text" name="cuisine" placeholder="Cuisine">
                                    <input type="text" name="garage" placeholder="Garage">
                                </div>
                                <button type="submit" class="site-btn">Submit Property</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Property Submit Section End -->
@endsection
