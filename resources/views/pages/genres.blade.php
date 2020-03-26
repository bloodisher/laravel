@extends('layouts.app')

@section('content')
 <p>hello</p>
    @foreach($allFilms->films_genres as $genre)
        <ul>
        <li><h2>{{$genre->id}}</h2></li>
        <li><h3><a href="/all/film/{{$genre->id}}">{{$genre->genre}}</a></h3></li>
        </ul>
    @endforeach
@endsection