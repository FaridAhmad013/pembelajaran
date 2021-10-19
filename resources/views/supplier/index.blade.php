<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Supplier</title>
</head>
<body>
    @foreach ($suppliers as $supplier)
    <div class="">
        Nama Supplier: {{ $supplier->nama }}
    </div>

    <div class="">
        Alamat : {{ $supplier->alamat }}
    </div>

    <div class="">
        Kode Pos {{ $supplier->kode_pos }}
    </div>

    <div>
        Kota : {{ $supplier->kota }}
    </div>

    <hr>
    @endforeach
</body>
</html>
