@extends('layouts.master')

@section('content')
    <div class="row   justify-content-center align-items-center">
        <div class="col-8">


            <div class="card card-primary ">
                <div class="card-header">
                    <h3 class="card-title">edit Type</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="POST" action="{{route('type.update',$type->id)}}">
                    @method('PATCH')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label >Type Title</label>
                            <input type="text" class="form-control" value="{{$type->title}}" name="title" placeholder="Enter title">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>



        </div>

    </div>

@endsection
