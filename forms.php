<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fomrs</title>
</head>
<body>
<h2>Students registration form</h2>
<form action="sendto.php"method="post">
    <label for="fname">First name</label><br>
    <input type="text" id="fname" name="fname"><br>
    <label for="lastname">Last name</label><br>
    <input type="text" id="lastname" name="lname"><br>
    <label for="email">email</label><br>
    <input type="email" id="email" name="Email" ><br>
    <input type="submit" value="Register" ><br>
</form>
</body>
</html>
