<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pembelian</title>
</head>
<body>
    @foreach ($pembelians as $pembelian)
    <div class="">
        Nama Barang : {{ $pembelian->nama_barang }}
    </div>

    <div>
        Nama Supplier : {{ $pembelian->nama_supplier }}
    </div>

    <div>
        QTY : {{ $pembelian->qty }}
    </div>

    <div>
        Tanggal : {{ $pembelian->tgl }}
    </div>

    <hr>
    @endforeach
</body>
</html>
