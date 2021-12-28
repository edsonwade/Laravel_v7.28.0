@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Hobby</div>
                    <div class="card-body">
                        <form action="{{route('hobby.index')}}" method="get">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control {{$errors->has('name') ? 'border-danger': ''}}"
                                       id="name" name="name" value="{{$hobby->name ?? old('name')}}">
                                <small class="form-text text-danger">{{$errors->first('name')}}</small>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control {{$errors->has('description') ? 'border-danger': ''}} "
                                          id="description" value="{{$hobby->description ?? old('description')}}"
                                          name="description" rows="5"></textarea>
                                <small class="form-text text-danger">{{$errors->first('description')}}</small>
                            </div>
                            <input class="btn btn-primary mt-4" type="submit" value="Save Hobby">
                        </form>
                        <a class="btn btn-primary float-right" href="{{route('hobby.index')}}"><i
                                class="fas fa-arrow-circle-up"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

