<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($query as $data)
   <h2>Title : {{ $data['title'] }}</h2> 
    <p>
        {{ $data['content'] }}
    </p>
    <hr>
    @endforeach
</body>
</html>
