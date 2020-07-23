<div id="pinjam">
<h2>FORM PEMINJAMAN</h2>

<form action="{{ url('pinjam') }}" method="post">
@crsf
<div class="form-group">


<!-- NAMA PEMINJAM -->
<div class="form-group">
<input name="id_anggota" type="text" class="form-control">
<label for="id_anggota" class="control-label">Nama</label>
</div>

<!-- JUDUL BUKU -->
<div class="form-group">
<input name="judul_buku" type="text" class="form-control">
<label for="judul_buku" class="control-label">Judul Buku</label>
</div>

<!-- TANGGAL PINJAM -->
<div class="form-group">
<label for="tanggal_pinjam" class="control-label">Tanggal Pinjam</label>
<input name="tanggal_pinjam" type="date" class="form-control">
</div>

<!-- TANGGAL KEMBALI -->
<div class="form-group">
<label for="tanggal kembali" class="control-label">Tanggal kembali</label>
<input name="tanggal kembali" type="date" class="form-control">
</div>

<!-- JURUSAN -->
<div class="form-group">
<label for="jurusan" class="control-label">Jurusan</label>

<div class="form-check">
<input class="form-check-input" type="radio" name="jurusan" id="jurusan" value="RPL" checked>
<label class="form-check-label" for="jurusan">Perempuan</label>
</div>

<div class="form-check">
<input class="form-check-input" type="radio" name="jurusan" id="jurusan" value="TKJ">
<label class="dorm-check-label" for="jurusan">Laki-Laki</label>
</div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
<div>
@stop