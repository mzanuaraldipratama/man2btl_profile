<form action="{{ $url }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if (@$data)
        @method('PUT')
    @endif
    <div class="form-group">
        <label for="">Nama</label>
        <input type="text" class="form-control" name="name" value="{{ old('name', @$data->name) }}" required>
    </div>
    <div class="form-group">
        <label for="">Posisi/Jabatan</label>
        <input type="text" class="form-control" name="position" value="{{ old('position', @$data->position) }}"
            required>
    </div>
    <div class="form-group">
        <label for="">Gambar</label>
        <input type="file" class="form-control" name="image">
    </div>
    <button class="btn btn-primary btn-block">Simpan</button>
</form>
