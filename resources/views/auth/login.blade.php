<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="pt-4 pb-2">
            <h5 class="card-title text-center pb-0 fs-4">
                {{ __('Selamat datang!') }}
            </h5>
            <p class="text-center small">
                {{ __('Silahkan masukkan email dan password Anda.') }}
            </p>
        </div>

        <x-jet-validation-errors class="mb-3 rounded-0" />

        @if (session('status'))
            <div class="alert alert-success mb-3 rounded-0" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <x-jet-label value="{{ __('E-mail') }}" />
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">{{ __('@') }}</span>
                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }} form-control" type="email" name="email" :value="old('email')" required />
                    <x-jet-input-error for="email"></x-jet-input-error>
                </div>
                
            </div>

            <div class="mb-3">
                <x-jet-label value="{{ __('Password') }}" />
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">{{ __('#') }}</span>
                    <x-jet-input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" required autocomplete="current-password" />
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>
            </div>

            <div class="mb-3">
                <div class="custom-control custom-checkbox">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <label class="custom-control-label" for="remember_me">
                        {{ __('Ingat saya?') }}
                    </label>
                </div>
            </div>

            <div class="mb-0">
                <x-jet-button>
                    {{ __('Log in') }}
                </x-jet-button>
                
                <p class="small mb-0 ml-3">
                    <a class="text-muted me-3" href="{{ route('register') }}">
                        {{ __('Belum punya akun?') }}
                    </a>
                    
                    @if (Route::has('password.request'))
                    <a class="text-muted me-3" href="{{ route('password.request') }}">
                        {{ __('Lupa password?') }}
                    </a>
                    @endif
                </p>     
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>