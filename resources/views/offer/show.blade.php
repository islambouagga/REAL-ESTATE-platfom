@extends('layouts.master')

@section('content')



        <h1>offer adderss :  {{$offer->address}}</h1>
        <h1>offer prix :  {{$offer->prix}}</h1>
        <h1>offer  surfface :  {{$offer->surfface}}</h1>
        <h1>offer  statu :  {{$offer->statu}}</h1>
        @foreach($offer->createByUser()->get() as $e)
            <h1>{{$e->name}}</h1>
        @endforeach
        <a class="btn btn-success" href="{{route('offer.edit',$offer->id)}}">Edit</a>
@endsection
