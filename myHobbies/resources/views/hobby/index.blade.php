@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">

                    <div class="card-header">All the hobbies</div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($hobbies as $hobby)
                                <li class="list-group-item">
                                    <a class="text-decoration-none" title="Show Details"
                                       href="/hobby/{{$hobby->id}}">{{$hobby->name}}</a>
                                    <a class="btn btn-sm btn-outline-success ml-2"
                                       href="{{route('hobby.index')}}/{{$hobby->id}}/edit"> <i class="fas fa-edit"></i>
                                        Edit Hobby</a>
                                    <form class="float-right" style="display: inline;" action="{{route('hobby.index')}}/{{$hobby->id}}"
                                          method="post">
                                        @method('DELETE')
                                        @csrf
                                        <input class="btn btn-sm btn-outline-danger" type="submit" value="delete">
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="mt-2">
                    <a href="{{route('hobby.create')}}" class=" btn btn-success btn-sm"> <i
                            class="fas fa-plus-circle"></i> Create new Hobby </a>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection

