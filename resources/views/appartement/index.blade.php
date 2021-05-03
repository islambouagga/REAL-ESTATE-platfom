@extends('layouts.master')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Address </th>
      <th scope="col"> Nomber de Etage</th>
      <th scope="col">Nomber de Chombre</th>
      <th scope="col">Nomber Salle De Bain</th>
      <th scope="col">Nomber de Balcon</th>
      <th scope="col">Nomber de Toilettes</th>
      <th scope="col">Nomber De cuisine</th>
      <th scope="col">Prix</th>
      <th scope="col">Surfface</th>
     <th scope="col">edit</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($appartements as $appartement)
  @foreach($appartement->offers as $offer)
    <tr>

      <td>{{$appartement->id}}</td>
     <td>{{$offer->address}}</td>
      <td>{{$appartement->etage}}</td>
      <td>{{$appartement->salledebain}}</td>
      <td>{{$appartement->balcon}}</td>
      <td>{{$appartement->toilettes}}</td>
      <td>{{$appartement->cuisine}}</td>
      <td>{{$offer->address}}</td>
      <td>{{$offer->prix}}</td>
      <td>{{$offer->surfface}}</td>

    <td><a class="btn " href="{{route('appartement.show',$appartement->id)}}"> <i class="fas fa-edit "
                                                                                                       style="color: green"></i></a></td>

                                  <td>         <form role="form" method="post"
                                                     action="{{route('appartement.destroy',$appartement->id)}}">
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
