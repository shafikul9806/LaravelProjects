@extends('layouts.app')

@section('title','SONGS')

@section('body')
   {{'MY FAVOURITE SONGS'}}
   @foreach($songs as $song)
       {{$song->Title}}
   @endforeach    
@endsection   