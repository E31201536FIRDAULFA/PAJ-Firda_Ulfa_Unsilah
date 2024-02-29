<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Data User</title> <!-- Judul Halaman -->

<style>
/* CSS Tabel */
table {
  width: 100%; /* Mengatur lebar tabel */
  border-collapse: collapse; /* Mengatur Garis Tepi Sel */
  border-spacing: 0; /* Mengatur Spasi antar sel */
  border: 2px solid #ddd; /* Garis tepi tabel */
}

/* CSS sel header */
th {
  background-color: #f2f2f2; /* Mengatur Warna latar belakang sel header */
  padding: 12px; /* Mengatur jarak sel  */
  border: 1px solid #ddd; /* Garis tepi sel header */
  text-align: left; /* Mengatur Rata Kanan Kiri Text */
}

/* CSS sel Value */
td {
  padding: 8px; /* Mengatur Jarak Sel */
  border: 1px solid #ddd; /* Garis tepi sel value */
}

</style>
</head>
<body>


<h4 align="center">DATA USER MAHASISWA</h4> <!-- Judul Tabel -->

<table> <!-- Tabel -->
  <thead>
    <tr> 
      <th>No.</th> <!-- Value Sel Induk/ Baris paling atas -->
      <th>Nama</th>
      <th>NIM</th>
      <th>Program</th>
      <th>Tahun Angkatan</th>
    
    </tr>
  </thead>
  <tbody>
            @foreach($datamhs as $row)  <!-- Mendefinisikan Array $datamhs -->
                <tr>
                    <td>{{ $row['id'] }}</td>
                    <td>{{ $row['nama'] }}</td>
                    <td>{{ $row['nim'] }}</td>
                    <td>{{ $row['program'] }}</td>
                    <td>{{ $row['angkatan'] }}</td>
                 
                </tr>
            @endforeach
        </tbody>
</table>

</body>
</html>