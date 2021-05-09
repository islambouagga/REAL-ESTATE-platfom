@extends('layouts.master')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">address</th>
            <th scope="col">prix</th>
            <th scope="col">surfface</th>
            <th scope="col">statu</th>
            <th scope="col">user name </th>
            <th scope="col">edit</th>
            <th scope="col">delete</th>
            <th scope="col">accepter</th>
            <th scope="col">rejeter</th>
        </tr>
        </thead>
        <tbody>
        @foreach($offers as $offer)
            <tr>

                <td>{{$offer->id}}</td>
                <td>{{$offer->address}}</td>
                <td>{{$offer->prix}}</td>
                <td>{{$offer->surfface}}</td>
                <td>{{$offer->statu}}</td>
                @foreach($offer->createByUser()->get() as $e)
                    <td>{{$e->name}}</td>
                @endforeach
                <td><a class="btn " href="{{route('offer.show',$offer->id)}}"> <i class="fas fa-edit "
                                                                                  style="color: blue"></i></a></td>

                <td>
                    <form role="form" method="post"
                          action="{{route('offer.destroy',$offer->id)}}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn"><i class="fas fa-trash red"
                                                             style="color: red"></i></button>
                    </form>
                </td>


                <td>
                    <form role="form" method="post"
                          action="{{route('offer.accepter',$offer->id)}}">
                        @method('PATCH')
                        @csrf
                        <button type="submit" class="btn"><i class="fas fa-check"
                                                             style="color: green"></i></button>
                    </form>


                </td>
                <td>
                    <form ro    le="form" method="post"
                          action="{{route('offer.rejeter',$offer->id)}}">
                        @method('PATCH')
                        @csrf
                        <button type="submit" class="btn"><i class="fas fa-times-circle"
                                                             style="color: black"></i></button>
                    </form>
                </td>

            </tr>
        @endforeach

        </tbody>
    </table>
@endsection
