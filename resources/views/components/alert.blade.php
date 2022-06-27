@if (session('success'))
    <div class="alert alert-success">
        <i class="fa fa-check-circle mr-1"></i>
        {{ session('success') }}
    </div>
@endif

@if (@$errors->any())
    <div class="alert alert-danger">
        <div class="font-weight-bold">
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <ul class="pl-4 mt-2 mb-0 text-sm">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
