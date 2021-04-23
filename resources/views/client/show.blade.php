@extends('layouts.master')

@section('content')

    @foreach($Client->users as $user)
        <h1>Client name :  {{$user->name}}</h1>
        <h1>Client nom :  {{$user->nom}}</h1>
        <h1>Client prenom :  {{$user->prenom}}</h1>
        <h1>Client adderss :  {{$Client->address}}</h1>
        <h1>Client tel :  {{$Client->tel}}</h1>
        <h1>Client email :  {{$user->email}}</h1>
    @endforeach

        <a class="btn btn-success" href="{{route('client.edit',$Client->id)}}">Edit</a>
@endsection
