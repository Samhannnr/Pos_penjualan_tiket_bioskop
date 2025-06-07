<div class="mb-3">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" value="{{ old('nama', $pelanggan->nama ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $pelanggan->email ?? '') }}" required>
</div>
<div class="mb-3">
    <label>No HP</label>
    <input type="text" name="no_hp" class="form-control" value="{{ old('no_hp', $pelanggan->no_hp ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Alamat</label>
    <textarea name="alamat" class="form-control" required>{{ old('alamat', $pelanggan->alamat ?? '') }}</textarea>
</div>
