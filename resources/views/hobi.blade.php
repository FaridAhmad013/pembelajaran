<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($hobies as $hobi)
    NIS : {{ $hobi['nis'] }} <br>
    Nama : {{ $hobi['nama'] }}<br>
    Kelas : {{ $hobi['kelas'] }}
    Hobi :
    <ul>
    @foreach ($hobi['hobi'] as $hobiku )
       <li>{{ $hobiku }}</li>
    @endforeach
    </ul>
    <hr>
    @endforeach
</body>
</html>
