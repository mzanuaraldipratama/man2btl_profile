@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-body">
        <h6 class="font-weight-bold">Data {{ $psb->nama_lengkap }}</h6>
        <p class="mb-0">Data Pendaftaran Siswa Baru</p>
    </div>

</div>

<div class="card">
    <div class="card-body">
        <dl class="row">
            <dt class="col-sm-4">Tempat/Tanggal Lahir :</dt>
            <dd class="col-sm-8">{{ $psb->tempat_tgl_lhr }}</dd>
            <dt class="col-sm-4">NISN :</dt>
            <dd class="col-sm-8">{{ $psb->nisn }}</dd>
            <dt class="col-sm-4">Jenis Kelamin :</dt>
            <dd class="col-sm-8">{{ $psb->jenis_kelamin }}</dd>
            <dt class="col-sm-4">Jumlah Saudara :</dt>
            <dd class="col-sm-8">{{ $psb->jumlah_saudara }}</dd>
            <dt class="col-sm-4">Anak ke :</dt>
            <dd class="col-sm-8">{{ $psb->anak_ke }}</dd>
            <dt class="col-sm-4">Alamat :</dt>
            <dd class="col-sm-8">{{ $psb->alamat_rumah }}</dd>
            <dt class="col-sm-4">TInggal dengan :</dt>
            <dd class="col-sm-8">{{ $psb->tinggal_dgn }}</dd>
            <dt class="col-sm-4">Asal Sekolah</dt>
            <dd class="col-sm-8">{{ $psb->asal_sekolah }}</dd>
            <dt class="col-sm-4">alamat sekolah asal :</dt>
            <dd class="col-sm-8">{{ $psb->alamat_sklh_asal }}</dd>
            <dt class="col-sm-4">nik :</dt>
            <dd class="col-sm-8">{{ $psb->nik }}</dd>
            <dt class="col-sm-4">no kartu keluarga :</dt>
            <dd class="col-sm-8">{{ $psb->no_kartu_keluarga }}</dd>
            <dt class="col-sm-4">hobi :</dt>
            <dd class="col-sm-8">{{ $psb->hobi }}</dd>
            <dt class="col-sm-4">cita-cita :</dt>
            <dd class="col-sm-8">{{ $psb->cita_cita }}</dd>
            <dt class="col-sm-4">jarak sekolah :</dt>
            <dd class="col-sm-8">{{ $psb->jarak_sekolah }}</dd>
            <dt class="col-sm-4">no hp :</dt>
            <dd class="col-sm-8">{{ $psb->no_hp }}</dd>
            <dt class="col-sm-4">nama ayah :</dt>
            <dd class="col-sm-8">{{ $psb->nama_ayah }}</dd>
            <dt class="col-sm-4">tanggal lahir ayah :</dt>
            <dd class="col-sm-8">{{ $psb->tgl_lhr_ayah }}</dd>
            <dt class="col-sm-4">agama :</dt>
            <dd class="col-sm-8">{{ $psb->agama_ayah }}</dd>
            <dt class="col-sm-4">pendidikan ayah :</dt>
            <dd class="col-sm-8">{{ $psb->pendidikan_ayah }}</dd>
            <dt class="col-sm-4">pekerjaan ayah</dt>
            <dd class="col-sm-8">{{ $psb->pekerjaan_ayah }}</dd>
            <dt class="col-sm-4">penghasilan ayah :</dt>
            <dd class="col-sm-8">{{ $psb->penghasilan_ayah }}</dd>
            <dt class="col-sm-4">alamat ayah :</dt>
            <dd class="col-sm-8">{{ $psb->alamat_ayah }}</dd>
            <dt class="col-sm-4">nama ibu :</dt>
            <dd class="col-sm-8">{{ $psb->nama_ibu }}</dd>
            <dt class="col-sm-4">tanggal lahir ibu :</dt>
            <dd class="col-sm-8">{{ $psb->tgl_lhr_ibu }}</dd>
            <dt class="col-sm-4">agama :</dt>
            <dd class="col-sm-8">{{ $psb->agama_ibu }}</dd>
            <dt class="col-sm-4">pendidikan ibu :</dt>
            <dd class="col-sm-8">{{ $psb->pendidikan_ibu }}</dd>
            <dt class="col-sm-4">pekerjaan ibu:</dt>
            <dd class="col-sm-8">{{ $psb->pekerjaan_ibu }}</dd>
            <dt class="col-sm-4">penghasilan ibu :</dt>
            <dd class="col-sm-8">{{ $psb->penghasilan_ibu }}</dd>
            <dt class="col-sm-4">alamat ibu</dt>
            <dd class="col-sm-8">{{ $psb->alamat_ibu }}</dd>
            <dt class="col-sm-4"> jurusan pilihan :</dt>
            <dd class="col-sm-8">{{ $psb->jurusan_pilihan }}</dd>
            <dt class="col-sm-4"> email :</dt>
            <dd class="col-sm-8">{{ $psb->email }}</dd>
            <dt class="col-sm-4">no telepon :</dt>
            <dd class="col-sm-8">{{ $psb->no_telp }}</dd>
            </dd>
            </dl>
    </div>
</div>


@endsection
