@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-body">
        <h6 class="font-weight-bold">Halo {{ auth()->user()->name }}</h6>
        <p class="mb-0">Data Pendaftaran Siswa Baru</p>
    </div>

</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive"> 
            <table class="table table-striped table-inverse">
                <thead class="thead-inverse">
                    <tr>
                        <th>No.</th>
                        <th>Email</th>
                        <th>No.Telpon</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($psb as $item)
                        <tr>
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->no_telp }}</td>
                            <td>{{ $item->nama_lengkap }}</td>
                            <td>{{ $item->jurusan_pilihan }}</td>
                            <td><a href="{{ route('admin.psb.show' , $item->id) }}" class="btn btn-primary">Detail</a></td>
                        </tr>
                        
                        @endforeach
                    </tbody>
            </table>
        </div>
        
        
    </div>
</div>
@endsection
