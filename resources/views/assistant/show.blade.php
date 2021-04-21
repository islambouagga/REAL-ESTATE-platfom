@extends('layouts.master')

@section('content')

    @foreach($assistant->users as $user)
        <h1>Assisnat name :  {{$user->name}}</h1>
        <h1>Assisnat nom :  {{$user->nom}}</h1>
        <h1>Assisnat prenom :  {{$user->prenom}}</h1>
        <h1>Assisnat adderss :  {{$assistant->address}}</h1>
        <h1>Assisnat tel :  {{$assistant->tel}}</h1>
        <h1>Assisnat email :  {{$user->email}}</h1>
    @endforeach

        <a class="btn btn-success" href="{{route('assistant.edit',$assistant->id)}}">Edit</a>
@endsection
