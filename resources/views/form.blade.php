<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
<form action="" method="post">
    @csrf
    <label for="fname">First name:</label><br>
    <input type="text" name="firstName" value="{{$data ? $data->firstName : ''}}"><br><br>
    <label for="lname">Last name:</label><br>
    <input type="text" name="lastName" value="{{$data ? $data->lastName : ''}}"><br><br>
    <label for="phone">Phone:</label><br>
    <input type="text" name="phone" value="{{$data ? $data->phone : ''}}"><br><br>
    <label for="email">Email:</label><br>
    <input type="text" name="email" value="{{$data ? $data->email : ''}}"><br><br>
    <label for="address">Address:</label><br>
    <input type="text" name="address" value="{{$data ? $data->address : ''}}"><br><br>
    <label for="street">Street:</label><br>
    <input type="text" name="street" value="{{$data ? $data->street : ''}}"><br><br>
    <label for="city">City:</label><br>
    <input type="text" name="city" value="{{$data ? $data->city : ''}}"><br><br>
    <label for="state">State:</label><br>
    <input type="text" name="state" value="{{$data ? $data->state : ''}}"><br><br>
    <label for="zipcode">Zipcode:</label><br>
    <input type="text" name="zipcode" value="{{$data ? $data->zipcode : ''}}"><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
