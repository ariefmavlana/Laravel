<!DOCTYPE html>
<html lang="en">
<head>
    <title>Make CRUD</title>
</head>
<body>
    
    <h2>ARIEF MAULANA</h2>
    <h3>Data Pegawai</h3>

    <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

    <br>
    <br>

    <table border="1">
        <tr>
            <th>NAMA</th>
            <th>JABATAN</th>
            <th>USIA</th>
            <th>ALAMAT</th>
            <th>OPSI</th>
        </tr>
        @foreach($pegawai as $p)
        <tr>
            <td>{{ $p->pegawai_nama }}</td>
            <td>{{ $p->pegawai_jabatan }}</td>
            <td>{{ $p->pegawai_usia }}</td>
            <td>{{ $p->pegawai_alamat }}</td>
            <td>
                <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>

                <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

</body>
</html>