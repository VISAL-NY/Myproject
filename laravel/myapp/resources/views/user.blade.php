<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <h1>User List</h1>
    <?php
       // print_r($data);
    ?>

    <ul>
        @foreach($data as $id => $email)
            <!-- <li>{{$id}} => <a href="/user/{{$id}}">{{$email}}</a></li> -->
            <li>{{$id}} => <a href={{route("showuser",$id)}}>{{$email}}</a></li> <!--call with alias name route in web.php file-->
        @endforeach
    </ul>
</body>
</html> 