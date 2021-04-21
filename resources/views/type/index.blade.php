@extends('layouts.master')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">edit</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($types as $type)
    <tr>

      <td>{{$type->id}}</td>
      <td>{{$type->title}}</td>
    <td><a class="btn " href="{{route('type.show',$type->id)}}"> <i class="fas fa-edit "
                                                                                                       style="color: green"></i></a></td>

                                  <td>         <form role="form" method="post"
                                                     action="{{route('type.destroy',$type->id)}}">
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
