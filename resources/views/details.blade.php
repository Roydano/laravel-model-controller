@extends('layouts.app')
@section('title','comic-details')

@section('content')

    <div class="card-details">

        <h2>{{$serie['title']}}</h2>
        <div class="details-container">
           <img src="{{$serie['thumb']}}" alt="{{$serie['title']}}">
           <p>
               {{$serie['description']}}
           </p>
        </div>
        
        
        
    </div>

@endsection