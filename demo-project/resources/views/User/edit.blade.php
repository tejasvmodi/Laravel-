<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit UserPage</h1>
    <form method="post" action="{{route('user.update',$user->id)}}">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" value='{{$user->name}}'>
    <br>
    <label for="email">Email</label>
    <input type="text" name="email" value="{{$user->email}}">
    <br>
    <label for="password">Password</label>
    <input type="password" name="password" value="{{$user->password}}">
    <br>
    <label for="phone">Phone</label>
    <input type="text" name="phone" value="{{$user->phone}}">
    <br>
    <input type="submit" value="Create">
    </form>
    
</body>
</html>