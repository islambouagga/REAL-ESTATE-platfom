@extends('layouts.master')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">address</th>
      <th scope="col">prix</th>
      <th scope="col">surfface</th>
      <th scope="col">edit</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($offer as $offer)
    <tr>

      <td>{{$offer->id}}</td>
   
      <td>{{$offer->address}}</td>
      <td>{{$offer->prix}}</td>
      <td>{{$offer->surfface}}</td>

    <td><a class="btn " href="{{route('offer.show',$offer->id)}}"> <i class="fas fa-edit "
      style="color: green"></i></a></td>

                                  <td>         <form role="form" method="post"
                                                     action="{{route('offer.destroy',$offer->id)}}">
                                          @method('DELETE')
                                          @csrf
                                          <button type="submit" class="btn"><i class="fas fa-trash red"
                                                                               style="color: red"></i></button>
                                      </form>
      </td>
    </tr>
               @endforeach
               
  </tbody>
</table>
@endsection
