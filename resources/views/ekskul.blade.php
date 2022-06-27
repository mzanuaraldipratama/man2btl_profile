@extends('layouts.user')
@section('content')
    <x-breadcrumbs menu="Ekskul" />

    <x-container>
        <p>
        </p>
        <div class="row">
            @foreach ($ekskul as $item)
            <div class="col-4">
                <div class="card">
                    <img src="{{ asset($item->getImage) }}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                      <h6 class="text-center"><b>{{ Str::title($item->name) }}</b></h6>
                      <p>{{ ($item->description) }}</p>
                    </div>
                  </div>  
            </div>       
            @endforeach
        </div>
       
    </x-container>
@endsection
