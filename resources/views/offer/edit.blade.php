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

    <!-- Property Submit Section Begin -->
    <section class="property-submit-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="property-submit-form">
                        <form method="POST" action="{{ route('offer.update',$offer->id) }}">
                            @method('PATCH')
                            @csrf
                            <div class="pf-title">
                                <h4>Title</h4>
                                <input type="text" placeholder="Your Title*">
                            </div>
                            <div class="pf-location">
                                <h4>Property Location</h4>

                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $offer->address }}" required autocomplete="address" autofocus>

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
                            <div class="pf-feature-image">
                                <h4>Featured Image</h4>
                                <div class="feature-image-content"></div>
                            </div>
                            <div class="pf-property-details">
                                <h4>Property details</h4>
                                <div class="property-details-inputs">
                                    <input id="prix" type="text" class="form-control @error('surfface') is-invalid @enderror" name="surfface" value="{{ $offer->surfface }}" required autocomplete="surfface" autofocus>

                                    @error('surfface')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

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


{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Edit offer') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('offer.update',$offer->id) }}">--}}
{{--                        @method('PATCH')--}}
{{--                        @csrf--}}
{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $offer->address }}" required autocomplete="address" autofocus>--}}

{{--                                @error('address')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Prix') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="prix" type="text" class="form-control @error('prix') is-invalid @enderror" name="prix" value="{{ $offer->prix }}" required autocomplete="prix" autofocus>--}}

{{--                                @error('prix')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Surfface') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="prix" type="text" class="form-control @error('surfface') is-invalid @enderror" name="surfface" value="{{ $offer->surfface }}" required autocomplete="surfface" autofocus>--}}

{{--                                @error('surfface')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}





{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Edit') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--             --}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
