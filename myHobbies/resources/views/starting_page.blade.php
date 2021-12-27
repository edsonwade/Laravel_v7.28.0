@extends('layouts.app')

@section('page_title','Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Starting Page') }}</div>

                <div class="card-body">
                    
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae natus numquam sequi, illo accusamus praesentium consectetur unde assumenda tempora distinctio magnam possimus nesciunt vel, quis sed adipisci dignissimos laudantium reprehenderit.</p>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum ducimus mollitia minima cumque adipisci, quidem vero nobis possimus nostrum, a ad. Tempore a totam qui voluptate soluta tenetur. Beatae, corrupti!</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint veritatis quis, placeat nemo pariatur autem aperiam quibusdam vel, aliquid iure ipsam! Inventore eveniet atque, nobis blanditiis officia dolore pariatur enim.</p>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
