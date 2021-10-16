<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1>Data siswa</h1>
   @foreach ($siswa as $data)
    Nama : {{ $data['nama'] }} <br>
    Username : {{ $data['username'] }} <br>
    Email : {{ $data['email'] }} <br>
    Alamat : {{ $data['alamat'] }} <br>
    Mapel :
    <ul>
    @foreach ($data['mapel'] as $mapel )
    <li>{{  $mapel }}</li>
    @endforeach
</ul>
   @endforeach
</body>
</html>
