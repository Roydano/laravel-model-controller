@extends('layouts.app')
@section('title','comics')

@section('content')

    <div class="comics container">

        @foreach($series as $serie)

        <div class="card">
            <img src="{{$serie['thumb']}}" alt="{{$serie['title']}}">
            <h5>{{$serie['series']}}</h5>
           
        </div>

        @endforeach
        
    </div>

@endsection