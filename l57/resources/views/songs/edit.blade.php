@extends('layouts.app')

@section('title','SONGS EDIT')

@section('body')
     {{'SONG DETAILS :'}}<br>
     {{$song->Title}}<br>by
     {{$song->Artist}}<br>from
     {{$song->Album}}
    
@endsection   