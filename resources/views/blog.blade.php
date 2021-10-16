<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>

    <h2>Tampilan Data</h2>
    @foreach ($datas as $data)
    Id : {{ $data['id'] }} <br>
    Title : {{ $data['title'] }} <br>
    Content : {{ $data['content'] }}
    <hr>
    @endforeach

</body>
</html>
