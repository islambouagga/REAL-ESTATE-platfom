@extends('layouts.master')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name user</th>
      <th scope="col">nom user</th>
      <th scope="col">prenom</th>
      <th scope="col">address</th>
      <th scope="col">telephone</th>
      <th scope="col">email</th>
      <th scope="col">edit</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($client as $client)
  @foreach($client->users as $user)
    <tr>

      <td>{{$client->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->nom}}</td>
      <td>{{$user->prenom}}</td>
      <td>{{$client->address}}</td>
      <td>{{$client->tel}}</td>
      <td>{{$user->email}}</td>

    <td><a class="btn " href="{{route('client.show',$client->id)}}"> <i class="fas fa-edit "
                                                                                                       style="color: green"></i></a></td>

                                  <td>         <form role="form" method="post"
                                                     action="{{route('client.destroy',$client->id)}}">
                                          @method('DELETE')
                                          @csrf
                                          <button type="submit" class="btn"><i class="fas fa-trash red"
                                                                               style="color: red"></i></button>
                                      </form>
      </td>
    </tr>
               @endforeach
               @endforeach
  </tbody>
</table>
@endsection
