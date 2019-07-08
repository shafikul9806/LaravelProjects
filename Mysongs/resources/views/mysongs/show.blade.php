@extends('layouts.master')

@section('title','VIEW')

@section('body')
    {{'SONGS LIST'}}<br>
    {{$song->title}}<br>
    {{$song->artist}}<br>
    {{$song->album}}<br><br>
   
    Want To Upadte Your Songs??<br>
    <a href="{{action('SongsController@update', $songs['id'])}}">CLICK HERE</a> 
@endsection   