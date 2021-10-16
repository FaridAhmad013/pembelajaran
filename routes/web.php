<?php

use Illuminate\Support\Facades\Route;



// Route::get('/home', function () {
//     return view('welcome');
// });

// Route::get('/biodata/{nama}/{jenisKelamin}/{agama}/{umur}/{alamat}/{tanggalLahir}', function ($nama, $jenisKelamin, $agama, $umur, $alamat, $tanggalLahir) {
//     return "<h1>Biodata</h1>
//             Nama : $nama <br>
//             Jenis Kelamin : $jenisKelamin <br>
//             Agama : $agama <br>
//             Umur : $umur <br>
//             ALamat : $alamat <br>
//             Tanggal lahir : $tanggalLahir";
// });

// Route::get('/input/{nama}', function ($nama) {
//     return "Nama : $nama";
// });

// Route::get('/optional/{nama}/{usia?}', function ($nama, $usia = null) {
//     return "Nama : $nama <br>
//             Usia : $usia ";
// });

// Route::get('/ujian/{nama}/{kelas}/{matematika?}/{indonesia?}/{inggris?}/{produktif?}', function ($nama, $kelas, $matematika = 0, $indonesia = 0, $inggris = 0, $produktif = 0) {
//     return "Nama : $nama <br>
//             Kelas : $kelas <br>
//             Nilai Matematika : $matematika <br>
//             Indonesia : $indonesia <br>
//             Inggris : $inggris <br>
//             Produktif : $produktif <br>
//             Rata-rata : " . ($matematika + $indonesia + $inggris + $produktif) / 4;
// });

// Route::get('/pesan/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = null, $minuman = null, $cemilan = null) {
//     if ($makanan && $minuman && $cemilan != null) {
//         return "Anda memesan Makanan = $makanan <br>
//                 Anda memesan Minuman = $minuman <br>
//                 Anda memesan Cemilan = $cemilan";
//     } else if ($makanan && $minuman != null) {
//         return "Anda memesan Makanan = $makanan <br>
//                 Anda memesan Minuman = $minuman";
//     } else if ($makanan || $minuman != null) {
//         return $makanan != null ? "Anda memesan makanan : $makanan" : "Anda memesan minuman : $minuman";
//     } else if ($minuman || $cemilan) {
//         return $minuman != null ? "Anda memesan Minuman : $minuman " : "Anda memesan Cemilan : $cemilan";
//     } else {
//         return "Anda tidak memesan silahkan pulang";
//     }
// });

// Route::get('/{nama}', function () {
//     $nama = "Farid Ahmad";
//     $umur = 17;
//     return view('halo', compact('nama', 'umur'));
// });

// Route::get('posts/{nama?}/{kelas?}/{jenisKelamin}', function ($nama, $kelas, $jenisKelamin) {
//     return view('post', ['a' => $nama, 'kelas' => $kelas, 'jenisKelamin' => $jenisKelamin]);
// });

Route::get('/bloger', function () {
    $datas = [
        ['id' => 1, 'title' => 'olahraga', 'content' => 'Sepak Bola'],
        ['id' => 2, 'title' => 'Ekonomi', 'content' => 'Hutang Ri ke luar negri']
    ];

    return view('blog', compact('datas'));
});

Route::get('/data-siswa', function () {
    $values = [
        ['nis' => 1, 'nama' => 'Abdul', 'jenis_kelamin' => 'Laki-Laki', 'jurusan' => 'RPL', 'kelas' => 'XII RPL 1', 'wali_kelas'=> 'Herna Diana'],
        ['nis' => 12, 'nama' => 'Ghani', 'jenis_kelamin' => 'Laki-Laki', 'jurusan' => 'RPL', 'kelas' => 'XII RPL 1', 'wali_kelas'=> 'Herna Diana'],
        ['nis' => 123, 'nama' => 'Farid', 'jenis_kelamin' => 'Laki-Laki', 'jurusan' => 'RPL', 'kelas' => 'XII RPL 1', 'wali_kelas'=> 'Herna Diana'],
        ['nis' => 1234, 'nama' => 'Ahmad', 'jenis_kelamin' => 'Laki-Laki', 'jurusan' => 'TKR', 'kelas' => 'XII TKR 1', 'wali_kelas'=> 'Wali TKR'],
        ['nis' => 12345, 'nama' => 'Fadhilah', 'jenis_kelamin' => 'Laki-Laki', 'jurusan' => 'TBSM', 'kelas' => 'XII TBSM 1', 'wali_kelas'=> 'Wali TBSM'],
        ['nis' => 123456, 'nama' => 'Andika', 'jenis_kelamin' => 'Laki-Laki', 'jurusan' => 'RPL', 'kelas' => 'XII RPL 1', 'wali_kelas'=> 'Herna Diana'],
        ['nis' => 1234567, 'nama' => 'Cecep', 'jenis_kelamin' => 'Laki-Laki', 'jurusan' => 'TKR', 'kelas' => 'XII TKR 1', 'wali_kelas'=> 'Wali TKR'],
        ['nis' => 12345678, 'nama' => 'Supri', 'jenis_kelamin' => 'Laki-Laki', 'jurusan' => 'TBSM', 'kelas' => 'TBSM RPL 1', 'wali_kelas'=> 'Wali TBSM'],
        ['nis' => 123456789, 'nama' => 'Ikbal', 'jenis_kelamin' => 'Laki-Laki', 'jurusan' => 'RPL', 'kelas' => 'XII RPL 1', 'wali_kelas'=> 'Herna Diana'],
        ['nis' => 12345678910, 'nama' => 'kardi', 'jenis_kelamin' => 'Laki-Laki', 'jurusan' => 'RPL', 'kelas' => 'XII RPL 1', 'wali_kelas'=> 'Herna Diana']
    ];

    return view('data-siswa', compact('values'));
});

Route::get('/siswa', function () {
    $siswa = [
        [
        'id' => 1,
        'nama' => 'Aditya',
        'username' => 'aditya',
        'email' => 'aditya@gmail.com',
        'alamat' => 'Bandung',
        'mapel' => [
            'mapel1' => 'Bahasa Indonesia',
            'mapel2' => 'Bahasa Inggris',
            'mapel3' => 'Bahasa Jepang'
        ]
        ]
    ];

    return view('siswa', compact('siswa'));
});

Route::get('/hobi', function () {
    $hobies = [
        [
            'nis' => 123,
            'nama' => 'Adzura',
            'kelas' => '12 RPL 1',
            'hobi' => ['Pergi Ke CC', 'Tiktokan', 'Makan Banyak']
        ],
        [
            'nis' => 456,
            'nama' => 'Ikbal',
            'kelas' => '12 RPL 1',
            'hobi' => ['Main Bola', 'Ngaji', 'Memancing', 'Selalu tersenyun']
        ]
    ];

    return view('hobi', compact('hobies'));
});



