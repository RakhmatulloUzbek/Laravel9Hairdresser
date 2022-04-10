<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>This is Test Page</h1>
<form action="/save" method="post">
    @csrf
    <label for="fname"></label>First nama :
    <input type="text" name="fname"><br>
    <label for="lname"></label>Last name :
    <input type="text" name="lname">
    <input type="submit" value="Save">
</form>

</body>
</html>
