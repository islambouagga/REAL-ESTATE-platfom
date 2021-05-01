@extends('layouts.master')

@section('content')

    @foreach($Client->users as $user)
        <h1>appartement address :  {{$offer->address}}</h1>
        <h1>appartement etage :  {{$appartement->etage}}</h1>
        <h1>appartement chombre :  {{$appartement->chombre}}</h1>
        <h1>appartement salledebain :  {{$appartement->salledebain}}</h1>
        <h1>appartement balcon :  {{$appartement->balcon}}</h1>
        <h1>appartement toilettes :  {{$appartement->toilettes}}</h1>
        <h1>appartement cuisine :  {{$appartement->cuisine}}</h1>
        <h1>appartement prix :  {{$offer->prix}}</h1>
        <h1>appartement surfface :  {{$offer->surfface}}</h1>
        


    @endforeach

        <a class="btn btn-success" href="{{route('appartement.edit',$appartement->id)}}">Edit</a>
@endsection
