@extends('layouts.app')

@section('page_title','Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Starting Page') }}</div>

                <div class="card-body">


                  @foreach ($data as $data )
                      echo "<pre>";
                      var_dump(json_encode($data['name']));
                      echo "</pre>";
                  @endforeach
                    
                  
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
