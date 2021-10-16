<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Siswa</title>
</head>
<body>
    <h1>Tampilan data siswa</h1>

    @foreach ($values as $value)
    NIS : {{ $value['nis'] }} <br>
    Nama : {{ $value['nama'] }} <br>
    Jenis Kelamin {{ $value['jenis_kelamin'] }} <br>
    Jurusan {{ $value['jurusan'] }} <br>
    Kelas  : {{ $value['kelas'] }} <br>
    Wali Kelas : {{ $value['wali_kelas'] }} <hr>
    @endforeach
</body>
</html>
