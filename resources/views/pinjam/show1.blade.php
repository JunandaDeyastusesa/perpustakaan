<div id="pinjam">
<h2>Struk Pinjam</h2>

<table class="table table-striped">

<tr>
<th>Peminjam</th>
<td>{{$pinjam->id}}</td>
</tr>
<tr>

<tr>
<th>Nama</th>
<td>{{$pinjam->judul_buku}}</td>
</tr>
<tr>

<tr>
<th>Tanggal Pinjam</th>
<td>{{$pinjam->tanggal_pinjam}}</td>
</tr>
<tr>

<tr>
<th>Tanggal Kembali</th>
<td>{{$pinjam->tanggal_kembali}}</td>
</tr>

<tr>
<th>Jenis Kelamin</th>
<td>{{$pinjam->jenis_kelamin}}</td>
</tr>
</table>
</div>

@stop