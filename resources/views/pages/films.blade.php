@extends('layouts.app')
@section('content')
 <table>
     @foreach ($items as $item)
        <tr>
        
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->raiting}}</td>
        <td>{{$item->director}}</td>
        <td>{{$item->plot}}</td>
        <td>{{$item->year}}</td>
        </tr>
         
     @endforeach
 </table>
 @endsection

