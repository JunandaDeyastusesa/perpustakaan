<!DOCTYPE html>
<html>
<head>
  <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
  
<body>
  <style type="text/css">
    table tr td,
    table tr th{
      font-size: 9pt;
    }
  </style>
  <div id="siswa" style="padding-left: 60px">
  <h2>detail peminjaman</h2>

  
    <table class="table">
     <tbody>
      <tr>
        <th>Nama Peminjam</th>
        <td>{{! empty($pinjam_list->anggota->name) ? $pinjam_list->anggota->name : '-' }}</td>
      </tr>
      <tr>
        <th>Judul Buku</th>
        <td>{{! empty($pinjam_list->buku->judul) ? $pinjam_list->buku->judul : '-' }}</td>
      </tr>
      <tr>
        <th>Tanggal Pinjam</th>
        <td>{{ $pinjam_list->tgl_pinjam }}</td>
      </tr>
      <tr>
        <th>Tanggal Pinjam</th>
        <td>{{ $pinjam_list->status }}</td>
      </tr>

        </tbody>
    </table>
    
    <br>
    <br>
    <br>
    <br>
  </div>
  
</body>
</html>




