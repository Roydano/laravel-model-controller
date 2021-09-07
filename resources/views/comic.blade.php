@extends('layouts.app')
@section('title','comics')

@section('content')

    <div class="comics container">

        @foreach($series as $key => $serie)

        <div class="card">
            <a href="{{ route('comic-details', ['id' => $key])}} "><img src="{{$serie['thumb']}}" alt="{{$serie['title']}}"></a>
            <h5>{{$serie['series']}}</h5>
           
        </div>

        @endforeach
        
    </div>

@endsection