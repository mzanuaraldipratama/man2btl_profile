@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h6>Data Mata Pelajaran</h6>
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add">
                <i class="fa fa-plus-circle mr-1"></i> Tambah
            </button>
        </div>
        <div class="card-body">

            <x-alert />

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="10">#</th>
                            <th>Kelas</th>
                            <th>Mata Pelajaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($kelas as $d)
                            <tr>
                                <td class="align-top" rowspan="{{ $d->mapel->count() + 1 }}">{{ $loop->iteration }}
                                </td>
                                <td class="align-top" rowspan="{{ $d->mapel->count() + 1 }}">{{ $d->name }}</td>
                            </tr>
                            @forelse ($d->mapel as $data)
                                <tr>
                                    <td>
                                        {{ $data->name }}
                                        <p class="text-muted text-sm mb-0">{{ $data->description }}</p>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.mapel.destroy', $data->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger"
                                                onclick="return confirm('Yakin ingin menghapus data ini?')"><i
                                                    class="fa fa-trash"></i></button>
                                        </form>
                                        <button data-toggle="modal" data-target="#edit_{{ $data->id }}"
                                            class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" align="center">-belum ada data-</td>
                                </tr>
                            @endforelse
                        @empty
                            <tr>
                                <td colspan="4" align="center">-belum ada data-</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{ $mapel->links() }}
        </div>
    </div>

    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <h5 class="modal-title">Tambah Guru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <x-mapel.form :url="route('admin.mapel.store')" :kelas="$kelas" />
                </div>
            </div>
        </div>
    </div>

    @foreach ($mapel as $data)
        <div class="modal fade" id="edit_{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header d-flex">
                        <h5 class="modal-title">Edit Mata Pelajaran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <x-mapel.form :url="route('admin.mapel.update', $data->id)" :kelas="$kelas" :data="$data" />
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
