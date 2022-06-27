<form action="{{ $url }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if (@$data)
        @method('PUT')
    @endif
    <div class="form-group">
        <label>Kelas</label>
        <select name="kelas_id" class="form-control" required>
            <option value="">-Silakan Pilih-</option>
            @foreach ($kelas as $item)
                <option value="{{ $item->id }}"
                    {{ old('kelas_id', @$data->kelas_id) == $item->id ? 'selected' : '' }}>
                    {{ $item->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Mapel</label>
        <input type="text" class="form-control" name="name" value="{{ old('name', @$data->name) }}" required>
    </div>
    <div class="form-group">
        <label for="">Keterangan</label>
        <textarea name="description" class="form-control" required>{{ old('description', @$data->description) }}</textarea>
    </div>
    <button class="btn btn-primary btn-block">Simpan</button>
</form>
