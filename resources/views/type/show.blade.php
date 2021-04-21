@extends('layouts.master')

@section('content')
    <h1>Type Title :  {{$type->title}}</h1>


    <a class="btn btn-success" href="{{route('type.edit',$type->id)}}">Edit</a>
@endsection
