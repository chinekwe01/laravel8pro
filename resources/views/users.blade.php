<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>
    <h1>View Users</h1>
    {{-- injecting the username from index()function in UsersController --}}
    <h2>Username is: {{ $name }}</h2>
    <p>Name: {{ $users['name'] }}</p>
    <p>Email: {{ $users['email'] }}</p>
    <p>Phone: {{ $users['phone'] }}</p>
</body>
</html>


