@extends('layouts.app')
@section('content')

        @foreach($allFilms->films as $film)
        <ul>
        <li><h2>{{$film->id}}</h2></li>
        <li><h4><a href="/genres/{{$film->id}}">{{$film->name}}</a></h4></li>
        <li><h5>{{$film->director}}</h5></li>
        <li><h5>{{$film->year}}</h5></li>
        <li><h5>{{$film->raiting}}</h5></li>
        </ul>
         @endforeach 

 @endsection