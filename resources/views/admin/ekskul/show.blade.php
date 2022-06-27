@extends('layouts.admin')
@section('content')
    <a href="{{ route('admin.ekskul.index') }}" class="text-primary"><i class="fa fa-angle-left mr-1"></i>Kembali</a>

    <div class="card mt-3">
        <div class="card-header">
            <h6>Dokumentasi Kegiatan</h6>
        </div>
        <div class="card-body">
            <x-alert />
            <p class="text-dark font-weight-bold">Ekskul: {{ $data->name }}</p>

            <form action="{{ route('admin.ekskul.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <span>Form Upload Gambar Kegiatan</span>
                <input type="hidden" name="ekskul_id" value="{{ $data->id }}">
                <div class="row mt-1">
                    <div class="col-md-6">
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>

            @if ($data->images->count() > 0)
                <div class="row mt-3">
                    @foreach ($data->images as $image)
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{ $image->getImage }}" alt="" class="img-fluid mb-3">

                                    <form action="{{ route('admin.ekskul.destroy', $image->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="type" value="galeri">
                                        <button class="btn btn-danger btn-sm btn-block"
                                            onclick="return confirm('Yakin ingin menghapus gambar?')"><i
                                                class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center mt-3">
                    <p>-tidak ada gambar-</p>
                </div>
            @endif
        </div>
    </div>
@endsection
