<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello From Laravel</h1>

    <form  method ="post" action="/" id="">
     <input type="text" name="username">
    <button type="submit">Submit</button>
    </form>

    <form method="POST" action="/1" id="">
    @csrf
   @method('PUT') <!-- This directive is for method spoofing -->
    <input type="text" name="username" id="">
    <button type="submit">Submit PUT</button>
</form>
<form action="/1" method="POST">
    @csrf
   @method('DELETE')
    
    <button type="submit">Submit DELETE</button>
</form>
 
</body>
</html>