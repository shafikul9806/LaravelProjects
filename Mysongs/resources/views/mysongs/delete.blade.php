@extends('layouts.master')

@section('title','DELETE')

@section('body')
     SONG DELETED SUCCESSFULLY!!<br>
     Back to Homepage<br>
     <a href="{{route('home')}}">HOME</a>
@endsection