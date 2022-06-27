@extends('layouts.admin')
@section('content')
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h5>Data Galeri</h5>
        <button data-toggle="modal" data-target="#add" class="btn btn-primary"><i class="fa fa-plus-circle mr-1"></i>
            Tambah</button>
    </div>

    <x-alert />

    @if ($galeri->count() > 0)
        <div class="row">
            @foreach ($galeri as $data)
                <div class="col-md-4">
                    <div class="card overflow-hidden">
                        <img src="{{ $data->getImage }}" alt="">
                        <div class="card-body">
                            <span class="badge badge-primary">{{ $data->category->name }}</span>
                            <p>{{ $data->description }}</p>

                            <form action="{{ route('admin.galeri.destroy', $data->id) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus gambar?')"><i
                                        class="fa fa-trash"></i></button>
                            </form>
                            <button class="btn btn-success btn-sm" data-toggle="modal"
                                data-target="#edit_{{ $data->id }}"><i class="fa fa-pencil"></i></button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center">
            <p>-Galeri tidak tersedia-</p>
        </div>
    @endif

    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <h5 class="modal-title">Tambah Galeri</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <x-galeri.form :url="route('admin.galeri.store')" :categories=$categories />
                </div>
            </div>
        </div>
    </div>

    @foreach ($galeri as $data)
        <div class="modal fade" id="edit_{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header d-flex">
                        <h5 class="modal-title">Edit Galeri</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <x-galeri.form :url="route('admin.galeri.update', $data->id)" :categories=$categories :data="$data" />
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
