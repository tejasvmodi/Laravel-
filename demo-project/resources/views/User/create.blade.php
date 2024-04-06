<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create user page</h1>
  
    <form method="post" action="{{route('user.store')}}">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name">
    <br>
    <label for="email">Email</label>
    <input type="text" name="email">
    <br>
    <label for="password">Password</label>
    <input type="password" name="password">
    <br>
    <label for="phone">Phone</label>
    <input type="text" name="phone">
    <br>
    
    <input type="submit" value="Create">
    </form>
 
</body>
</html>