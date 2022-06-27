@extends('layouts.user')
@section('content')
    <x-breadcrumbs menu="Mata Pelajaran" />

    <x-container>
        <p>
        </p>
        <div class="row">
        @foreach ($kelas as $item)
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                  <h6 class="text-center"><b>{{ Str::title($item->name) }}</b></h6>
                  @foreach ($item->mapel as $mapel)
                  <h6 class="text-center"><b>{{Str::title( $mapel->name) }}</b></h6>
                  <small class="text-sm">{{ $mapel->description }}</small>
                      
                  @endforeach
                </div>
              </div>  
        </div>  
        @endforeach
        </div>
    </x-container>
@endsection
