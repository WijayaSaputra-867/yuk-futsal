<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="card-body">

            <div class="mb-3">
                {{ __('Lupa passwordmu? Tidak masalah. Biarkan kami tahu alamat e-mail kamu dan kami akan mengirimkan sebuah link yang berisi reset password mengizinkanmu untuk membuat yang baru.') }}
            </div>

            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show mb-3 rounded-0" role="alert">
                    <i class="bi bi-check2-circle"></i>
                    {{ session('status') }}
                </div>
            @endif

            <x-jet-validation-errors class="mb-3" />

            <form method="POST" action="/forgot-password">
                @csrf

                <div class="mb-3">
                    <x-jet-label value="Email" />
                    
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">{{ __('@') }}</span>
                        <x-jet-input type="email" name="email" :value="old('email')" required autofocus  class="form-control"/>
                    </div>
                </div>

                <div class="d-flex justify-content-end mt-4">
                    <x-jet-button>
                        {{ __('Kirim link reset password') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>