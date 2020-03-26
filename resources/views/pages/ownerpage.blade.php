@extends('layouts.app')

@section('content')
	contact page
    @foreach($films as $film)
    <h4><a href="/owner/film/{{$film->id}}">{{$film->name}}</a></h4>
    @endforeach
@endsection
