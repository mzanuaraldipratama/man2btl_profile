@extends('layouts.user')
@section('content')
    <x-breadcrumbs menu="Galeri" />

    <x-container>
        <p>
                    <h5 class="fw-bold text-center">Visi & Misi</h5>
                    <div class="table-responsive mb-3">
                        <table>
                            <tr>
                                <td width="70"></td>
                                <td width="20"></td>
                                <td>"MEWUJUDKAN PESERTA DIDIK YANG BERIMAN DAN BERTAQWA MEMILIKI AKHLAKUL KARIMAH SERTA MEMILIKI KEUNGGULAN DALAM ILMU PENGETAHUAN DAN TEKNOLOGI, MENCIPTAKAN IKLIM PEMEBELAJARAN YANG MENDIDIK, MEMANUSIAKAN DAN MENCERDASKAN. MELAKSNAKAN KEGIATAN PEMBELAJARAN YANG SENANTIASA MAMPU MENGAPLIKASIKAN SAINS DAN TEKNOLOGI"</td>
                            </tr>
                        </table>
        </p>
        @foreach ($kategori as $item)
        <h1 class="text-center mt-4">{{ $item->name }}</h1>
        <hr>
        <div class="row">
            @foreach ($item->galeri as $galeri)
            <div class="col-4">
                <div class="card">
                    <img src="{{ asset($galeri->getImage) }}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                      <h6 class="text-center"><b>{{ Str::title($item->name) }}</b></h6>
                      <p>{{ ($galeri->description) }}</p>
                    </div>
                </div>
             </div> 
            @endforeach
        </div>
        
            
        @endforeach
        {{-- <div class="row">
         @foreach ($kategori as $item)
         <div class="col-6">
            <div class="card">
                <div class="card-body">
                  <h6 class="text-center"><b>{{ Str::title($item->name) }}</b></h6>
                  <p>{{ ($item->description) }}</p>
                </div>
            </div>
         </div>
        </div> 
        @endforeach--}}
        

            
        
    </x-container>
@endsection
