@extends('layouts.app')
@section('content')

    <h1> {{$title}}</h1>
    @if (count($serials)>0)
        <ul>
            @foreach ($serials as $serial)

            <li>{{$serial}}</li>
                
            @endforeach
        </ul>
    @endif


       @endsection
