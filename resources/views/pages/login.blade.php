<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
   <form method="POST" action="{{route('user')}}">
    @csrf
    <input type="text" name="user" placeholder="Enter your username">
    <input type="password" name="password" placeholder="Enter your password">
    <button type="submit">Login</button>
   </form>
</body>
</html>