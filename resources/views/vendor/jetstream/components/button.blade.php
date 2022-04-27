<div class="col-12 my-3">
    <button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-primary w-100 text-uppercase text-white']) }}>
        {{ $slot }}
    </button>
</div>