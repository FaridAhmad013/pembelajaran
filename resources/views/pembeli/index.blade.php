<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pembeli</title>
</head>
<body>
    @foreach ($pembelis as $pembeli)
    <div class="">
        Nama : {{ $pembeli->nama }}
    </div>

    <div>
        Jenis Kelamin {{ $pembeli->jns_kelamin }}
    </div>

    <div>
        ALamat : {{ $pembeli->alamat }}
    </div>

    <div>
        Kode Pos : {{ $pembeli->kode_pos }}
    </div>

    <div>
        Kota : {{ $pembeli->kota }}
    </div>

    <div>
        Tanggal Lahir : {{ $pembeli->tgl_lahir }}
    </div>

    <hr>
    @endforeach
</body>
</html>
