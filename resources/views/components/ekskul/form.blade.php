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
        <label for="">Keterangan</label>
        <textarea name="description" class="form-control" rows="5"
            required>{{ old('description', @$data->description) }}</textarea>
    </div>
    <div class="form-group">
        <label for="">Logo</label>
        <input type="file" class="form-control" name="logo">
    </div>
    <button class="btn btn-primary btn-block">Simpan</button>
</form>
