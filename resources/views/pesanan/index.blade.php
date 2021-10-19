<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesanan</title>
</head>
<body>
    @foreach ($pesanans as $pesanan)
    <div>
        Nama Pelanggan : {{ $pesanan->nama_pelanggan }}
    </div>

    <div>
        Nama Barang : {{ $pesanan->nama_barang }}
    </div>

    <div>
        Tanggal Pesan : {{ $pesanan->tgl_pesan }}
    </div>

    <hr>
    @endforeach
</body>
</html>
