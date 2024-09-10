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
        @csrf

    <input type="text" name="username">
    <button type=submit">Submit</button>
    </form>

    <form  method ="POST" action="/" id="">
    @csrf

        <input type="hidden" name="method" value="PUT">
        
    <input type="text" name="username">
    <button type="submit">Submit PUT</button>
    </form>
</body>
</html>