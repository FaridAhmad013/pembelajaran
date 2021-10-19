<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barang</title>
</head>
<body>
    @foreach ($barangs as $barang)
    <div class="">
        Nama Barang : {{ $barang->nama }}
    </div>
    <div class="">
        Varian : {{ $barang->varian }}
    </div>
    <div class="">
        Harga Beli : {{ $barang->harga_beli }}
    </div>

    <div class="">
        Harga Jual : {{ $barang->harga_jual }}
    </div>

    <hr>
    @endforeach
</body>
</html>
