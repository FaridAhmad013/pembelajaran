<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biodata</title>
</head>
<body>
    
    @foreach ($biodata as $data)
    Name : {{ $data->name }} <br>
    Born Date :{{ $data->bornDate }} <br>
    Gender : {{ $data->gender }} <br>
    Address : {{ $data->address }} <br>
    Religion : {{ $data->religion }} <br>
    Age : {{ $data->age }} <br>
    Hobby : {{ $data->hobby }}

    <hr>

    @endforeach
</body>
</html>
