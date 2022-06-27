@extends('layouts.user')
@section('content')
    <x-breadcrumbs menu="Form Pendaftaran Penerimaan Siswa Baru" />

    <x-container>
        <form action="{{ route('formpsb.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-12">
                    <h5 class="fw-bold">A. Identitas Siswa</h5>
                    <hr>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                      <label for="" class="form-label">Nama Lengkap</label>
                      <input type="text" class="form-control" name="nama_lengkap" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tempat/tanggal lahir</label>
                        <input type="text" class="form-control" name="tempat_tgl_lhr" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">NISN</label>
                        <input type="text" class="form-control" name="nisn" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Jenis Kelamin</label>
                      <select class="form-control" name="jenis_kelamin" id="">
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jumlah Saudara</label>
                        <input type="text" class="form-control" name="jumlah_saudara" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Anak ke-</label>
                        <input type="text" class="form-control" name="anak_ke" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Alamat Rumah</label>
                        <input type="text" class="form-control" name="alamat_rumah" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Tinggal Dengan</label>
                      <select class="form-control" name="tinggal_dgn" id="">
                        <option>Orang Tua</option>
                        <option>Saudara</option>
                        <option>Menyewa/Kost</option>
                      </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                      <label for="" class="form-label">Asal Sekolah</label>
                      <input type="text" class="form-control" name="asal_sekolah" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Alamat Sekolah Asal</label>
                        <input type="text" class="form-control" name="alamat_sklh_asal" id="" aria-describedby="helpId" placeholder="">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">NIK</label>
                        <input type="text" class="form-control" name="nik" id="" aria-describedby="helpId" placeholder="">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">No. Kartu Keluarga</label>
                        <input type="text" class="form-control" name="no_kartu_keluarga" id="" aria-describedby="helpId" placeholder="">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Hobi</label>
                        <input type="text" class="form-control" name="hobi" id="" aria-describedby="helpId" placeholder="">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Cita-cita</label>
                        <input type="text" class="form-control" name="cita_cita" id="" aria-describedby="helpId" placeholder="">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Jarak Rumah Ke Sekolah</label>
                        <input type="text" class="form-control" name="jarak_sekolah" id="" aria-describedby="helpId" placeholder="">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">No.Hp</label>
                        <input type="text" class="form-control" name="no_hp" id="" aria-describedby="helpId" placeholder="">
                      </div>
                </div>
                <div class="col-12">
                    <h5 class="fw-bold">B. Identitas Orang Tua/Wali</h5>
                    <hr>
                </div>
                <div class="col-6">
                    <h5 class="fw-bold">Identitas Ayah</h5>
                    <div class="mb-3">
                      <label for="" class="form-label">Nama</label>
                      <input type="text" class="form-control" name="nama_ayah" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tempat/Tanggal Lahir</label>
                        <input type="text" class="form-control" name="tgl_lhr_ayah" id="" aria-describedby="helpId" placeholder="">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Agama</label>
                        <input type="text" class="form-control" name="agama_ayah" id="" aria-describedby="helpId" placeholder="">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Pendidikan</label>
                        <input type="text" class="form-control" name="pendidikan_ayah" id="" aria-describedby="helpId" placeholder="">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan_ayah" id="" aria-describedby="helpId" placeholder="">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Penghasilan/Bulan</label>
                        <input type="text" class="form-control" name="penghasilan_ayah" id="" aria-describedby="helpId" placeholder="">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Alamat Rumah Ayah</label>
                        <input type="text" class="form-control" name="alamat_ayah" id="" aria-describedby="helpId" placeholder="">
                      </div>
                </div>
                <div class="col-6">
                    <h5 class="fw-bold">Identitas Ibu</h5>
                    <div class="mb-3">
                      <label for="" class="form-label">Nama</label>
                      <input type="text" class="form-control" name="nama_ibu" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tempat/Tanggal Lahir</label>
                        <input type="text" class="form-control" name="tgl_lhr_ibu" id="" aria-describedby="helpId" placeholder="">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Agama</label>
                        <input type="text" class="form-control" name="agama_ibu" id="" aria-describedby="helpId" placeholder="">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Pendidikan</label>
                        <input type="text" class="form-control" name="pendidikan_ibu" id="" aria-describedby="helpId" placeholder="">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan_ibu" id="" aria-describedby="helpId" placeholder="">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Penghasilan/Bulan</label>
                        <input type="text" class="form-control" name="penghasilan_ibu" id="" aria-describedby="helpId" placeholder="">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Alamat Rumah Ibu</label>
                        <input type="text" class="form-control" name="alamat_ibu" id="" aria-describedby="helpId" placeholder="">
                      </div>
                      
                </div>
                <div class="col-12">
                    <h5 class="fw-bold">C. Pilihan Jurusan</h5>
                    <hr>
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Jurusan</label>
                  <select class="form-control" name="jurusan_pilihan" id="">
                    <option>MIPA</option>
                    <option>IPS</option>
                    <option>KEAGAMAAN</option>
                  </select>
                </div>  
                <div class="col-6">
                    <div class="mb-3">
                      <label for="" class="form-label">Email</label>
                      <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
                    </div> 
            </div>
            <div class="col-6">
                <div class="mb-3">
                  <label for="" class="form-label">No.Telpon</label>
                  <input type="text" class="form-control" name="no_telp" id="" aria-describedby="helpId" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary btn-block text-center">Simpan</button>
        </form>
        
    </x-container>
@endsection
