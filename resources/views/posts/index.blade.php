<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>


    

</head>
<body>
<h1>Posts Index page</h1>
<div>

Myname is {{$username}} and i have {{$age}};

<ul>
   @foreach ($posts as $post)
       <li>{{$post}}</li>
   @endforeach

</ul>

</div>
</body>
</html>