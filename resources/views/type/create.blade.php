@extends('layouts.master')

@section('content')

    <form role="form" method="post" action="{{route('type.store')}}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">type title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="enter title">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
