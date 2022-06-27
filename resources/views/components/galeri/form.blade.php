@props(['data' => null, 'categories' => null, 'url' => null])

<form action="{{ $url }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if (@$data)
        @method('PUT')
    @endif
    <div class="form-group">
        <label>Kategori</label>
        <select name="category_id" class="form-control" required>
            <option value="">-Silakan Pilih-</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                    {{ old('category_id', @$data->category_id) == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Gambar</label>
        <input type="file" class="form-control" name="image">
    </div>
    <div class="form-group">
        <label for="">Keterangan</label>
        <textarea name="description" class="form-control" required>{{ old('description', @$data->description) }}</textarea>
    </div>
    <button class="btn btn-primary btn-block">Simpan</button>
</form>
