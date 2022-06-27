@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-body">
            <h6 class="font-weight-bold">Halo {{ auth()->user()->name }}</h6>
            <p class="mb-0">Selamat datang di Dashboard website profile MAN 2 Barito Kuala</p>
        </div>
    </div>
@endsection
