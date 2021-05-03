@extends('layouts.master')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Villa') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('villa.update',$villa->id) }}">
                        @method('PATCH')
                        @csrf
                        @foreach($villa->offers as $offer)
                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text"
                                           class="form-control @error('address') is-invalid @enderror" name="address"
                                           value="{{ $offer->address}}" required autocomplete="address" autofocus>

                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __(' Nomber de Etage') }}</label>

                                <div class="col-md-6">
                                    <input id="etage" type="text"
                                           class="form-control @error('etage') is-invalid @enderror" name="etage"
                                           value="{{ $villa->etage }}" required autocomplete="etage" autofocus>

                                    @error('etage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Nomber de Chombre') }}</label>

                                <div class="col-md-6">
                                    <input id="chombre" type="text"
                                           class="form-control @error('chombre') is-invalid @enderror" name="chombre"
                                           value="{{ $villa->chombre }}" required autocomplete="chombre"
                                           autofocus>

                                    @error('chombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Nomber Salle De Bain') }}</label>

                                <div class="col-md-6">
                                    <input id="salledebain" type="text"
                                           class="form-control @error('salledebain') is-invalid @enderror"
                                           name="salledebain" value="{{ $villa->salledebain }}" required
                                           autocomplete="salledebain" autofocus>

                                    @error('salledebain')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Nomber de Balcon') }}</label>

                                <div class="col-md-6">
                                    <input id="balcon" type="text"
                                           class="form-control @error('balcon') is-invalid @enderror" name="balcon"
                                           value="{{ $villa->balcon }}" required autocomplete="balcon" autofocus>

                                    @error('balcon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __(' Nomber de Toilettes') }}</label>

                                <div class="col-md-6">
                                    <input id="toilettes" type="text"
                                           class="form-control @error('toilettes') is-invalid @enderror"
                                           name="toilettes" value="{{ $villa->toilettes }}" required
                                           autocomplete="toilettes" autofocus>

                                    @error('toilettes')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __(' Nomber De Cuisine') }}</label>

                                <div class="col-md-6">
                                    <input id="cuisine" type="text"
                                           class="form-control @error('cuisine') is-invalid @enderror" name="cuisine"
                                           value="{{ $villa->cuisine }}" required autocomplete="cuisine"
                                           autofocus>

                                    @error('cuisine')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __(' Nomber De Garage') }}</label>

                                <div class="col-md-6">
                                    <input id="garage" type="text"
                                           class="form-control @error('garage') is-invalid @enderror" name="garage"
                                           value="{{ $villa->garage }}" required autocomplete="garage" autofocus>

                                    @error('garage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Prix') }}</label>

                                <div class="col-md-6">
                                    <input id="prix" type="text"
                                           class="form-control @error('prix') is-invalid @enderror" name="prix"
                                           value="{{ $offer->prix }}" required autocomplete="prix" autofocus>

                                    @error('prix')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Surfface') }}</label>

                                <div class="col-md-6">
                                    <input id="surfface" type="text"
                                           class="form-control @error('surfface') is-invalid @enderror" name="surfface"
                                           value="{{ $offer->surfface }}" required autocomplete="surfface" autofocus>

                                    @error('surfface')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Edit') }}
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
