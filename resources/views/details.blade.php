@extends('layouts.app')
@section('title','comic-details')

@section('content')

    <div class="card-details">

        <h2>{{$series['title']}}</h2>
        <div class="details-container">
           <img src="{{$series['thumb']}}" alt="{{$series['title']}}">
           <p>
               {{$series['description']}}
           </p>
        </div>
        
        
        
    </div>

@endsection