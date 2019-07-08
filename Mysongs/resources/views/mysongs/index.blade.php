@extends('layouts.master')

@section('title','VIEW')

@section('body')
    MY SONGS<br>
    ADD SONGS<br>
    <!DOCTYPE html>
<html>
<head>
    <title>FORM</title>
</head>
<body>
   <h3>
   <center>
   <form action="mysongs" method="POST">
   	    @csrf
        <label for="title">TITLE : </label>
        <input type="text" name="title" id="title"><br><br>
        <label for="artist">ARTIST : </label>
        <input type="text" name="artist" id="artist"><br><br>
        <label for="album">ALBUM : </label>
        <input type="text" name="album" id="album"><br><br>
        <button type="submit">SUBMIT</button>
        
     </form>                     
     </center>
     
</h3>
</body>
</html>
@endsection    