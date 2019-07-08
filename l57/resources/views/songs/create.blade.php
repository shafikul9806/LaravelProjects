<!DOCTYPE html>
<html>
<head>
    <title>FORM</title>
</head>
<body>
   <h3>
   <center>
   <form action="store" method="post">
        <label for="Title">TITLE : </label>
        <input type="text" name="Title" id="Title"><br><br>
        <label for="Artist">ARTIST : </label>
        <input type="text" name="Artist" id="Artist"><br><br>
        <label for="Album">ALBUM : </label>
        <input type="text" name="Album" id="Album"><br><br>
        <input type="hidden" name="token" value="{{csrf_token()}}">
        <input type="submit" name="submit" value="ADD">
     </form>                     
     </center>
</h3>
</body>
</html>