@extends('layouts.user')
@section('content')
    <x-breadcrumbs menu="PSB (Penerimaan Siswa Baru)" />

    <x-container>
        <div class="row">
            <div class="col-6   ">
                <h5 class="fw-bold">Pendaftaran</h5>
                <div class="table-responsive mb-3">
                    <table>
                        <tr>
                            <td>Tempat</td>
                            <td>:</td>
                            <td>MAN 2 Barito Kuala</td>
                        </tr>
                        <tr>
                            <td>Jam</td>
                            <td>:</td>
                            <td>08:00 - 12:00 WITA (Senin-Kamis)</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td>08:00 - 11:00 WITA (Jum'at-Sabtu)</td>
                        </tr>
                    </table>
                </div>
        
                <h5 class="fw-bold">Syarat Pendaftaran</h5>
                <ol class="mb-3">
                    <li>Mengisi formulir pendaftaran (disediakan panitia)</li>
                    <li>Fotocopy ijazah SD/MI</li>
                    <li>Fotocopy Surat Keterangan lulus</li>
                    <li>Fotocopy Akta Kelahiran</li>
                    <li>Fotocopy Kartu Keluarga</li>
                    <li>Fotocopy KIP/KIS/PKH (jika ada)</li>
                    <li>Pas Foto berwarna: 2x3 = 4 lembar, 4x6 = 4 lembar</li>
                    <li>Persyaratan dimasukan dalam map warna hijau untuk laki-laki dan warna merah untuk perempuan (map tidak
                        diberi nama)</li>
                </ol>
        
                <h5 class="fw-bold">Untuk Informasi bisa dihubungi</h5>
                <div class="table-responsive mb-3">
                    <table>
                        <tr>
                            <td width="100">Wahyu</td>
                            <td width="20">:</td>
                            <td>082152686888</td>
                        </tr>
                        <tr>
                            <td>Nalahayati</td>
                            <td>:</td>
                            <td>082152686888</td>
                        </tr>
                        <tr>
                            <td>Laila</td>
                            <td>:</td>
                            <td>082152686888</td>
                        </tr>
                        <tr>
                            <td>Wisnu</td>
                            <td>:</td>
                            <td>082152686888</td>
                        </tr>
                        <tr>
                            <td>Fahriah</td>
                            <td>:</td>
                            <td>082152686888</td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <div class="col-6 text-center">
                <img src="{{ asset('assets/img/values-3.png') }}"
            </div>
            <div class="col-md-6">

                <a href="/formpsb"
                <button class="btn btn-primary btn-block text-center">Daftar Online Sekarang</button>
                </a>
            </div>
        </div>
        
    </x-container>
@endsection
