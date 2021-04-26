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
  @foreach($terres as $terre)
  @foreach($terre->offers as $offer)
    <tr>

      <td>{{$offer->id}}</td>

      <td>{{$offer->address}}</td>
      <td>{{$offer->prix}}</td>
      <td>{{$offer->surfface}}</td>

    <td><a class="btn " href="{{route('terre.show',$terre->id)}}"> <i class="fas fa-edit "
      style="color: green"></i></a></td>

                                  <td>         <form role="form" method="post"
                                                     action="{{route('terre.destroy',$terre->id)}}">
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
