@extends('layouts.master')

@section('content')

    @foreach($offer as $offer)
     
        <h1>offer adderss :  {{$offer->address}}</h1>
        <h1>offer tel :  {{$offer->prix}}</h1>
        <h1>offer  email :  {{$offer->surfface}}</h1>
    @endforeach

        <a class="btn btn-success" href="{{route('offer.edit',$offer->id)}}">Edit</a>
@endsection
