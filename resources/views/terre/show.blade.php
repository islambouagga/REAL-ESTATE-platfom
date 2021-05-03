@extends('layouts.master')

@section('content')

    @foreach($terre->offers as $offer)

        <h1>offer adderss :  {{$offer->address}}</h1>
        <h1>offer prix :  {{$offer->prix}}</h1>
        <h1>offer  surfface :  {{$offer->surfface}}</h1>
    @endforeach

        <a class="btn btn-success" href="{{route('terre.edit',$terre->id)}}">Edit</a>
@endsection
