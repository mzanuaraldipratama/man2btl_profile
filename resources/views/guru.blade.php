@extends('layouts.user')
@section('content')
    <x-breadcrumbs menu="Guru" />

    <x-container>
        <p>
        </p>
        <div class="row">
            @foreach ($guru as $item)
            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-body text-center">
                      <img src="{{ asset($item->getImage) }}" alt="avatar"
                        class="rounded-circle img-fluid" style="width: 150px; height:150px">
                      <h5 class="mt-3 mb-0"><b>{{ $item->name }}</b></h5>
                      <small class="text-muted mb-1">{{ $item->position }}</small>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <img src="{{ asset($item->getImage) }}" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
              <h6 class="text-center"><b>{{ Str::title($item->name) }}</b></h6>
              <p>{{ ($item->position) }}</p>
            </div> --}}
          </div>  
        </div>
       
            
        
    </x-container>
@endsection
