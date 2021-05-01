@extends('layouts.master')

@section('content')

    @foreach($Client->users as $user)
        <h1>villa address :  {{$offer->address}}</h1>
        <h1>villa etage :  {{$villa->etage}}</h1>
        <h1>villa chombre :  {{$villa->chombre}}</h1>
        <h1>villa salledebain :  {{$villa->salledebain}}</h1>
        <h1>villa balcon :  {{$villa->balcon}}</h1>
        <h1>villa toilettes :  {{$villa->toilettes}}</h1>
        <h1>villa cuisine :  {{$villa->cuisine}}</h1>
        <h1>villa prix :  {{$offer->prix}}</h1>
        <h1>villa surfface :  {{$offer->surfface}}</h1>
        


    @endforeach

        <a class="btn btn-success" href="{{route('appartement.edit',$appartement->id)}}">Edit</a>
@endsection
