@if ($errors->any())
    <div {!! $attributes->merge(['class' => 'alert alert-danger alert-dismissible fade show']) !!} role="alert">

        <div class="font-weight-bold">
            <i class="bi bi-exclamation-octagon me-1"></i>
            {{ __('Oops! Sepertinya ada yang tidak beres.') }}
        </div>
        
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

    </div>
@endif
