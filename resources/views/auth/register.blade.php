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
                {{ __('Silahkan daftar di bawah ini.') }}
            </p>
        </div>

        <x-jet-validation-errors class="mb-3" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3">
                <x-jet-label value="{{ __('Nama') }}" />
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">{{ __('T') }}</span>
                    <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }} form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-jet-input-error for="name"></x-jet-input-error>
                </div>
            </div>

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
                    <x-jet-input class="{{ $errors->has('password') ? 'is-invalid' : '' }} form-control" type="password" name="password" required autocomplete="new-password" />
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>
            </div>

            <div class="mb-3">
                <x-jet-label value="{{ __('Konfirmasi Password') }}" />
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">{{ __('#') }}</span>
                    <x-jet-input class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mb-3">
                    <div class="form-check">
                        <x-jet-checkbox id="terms" name="terms" />
                        <label class="form-check-label" for="terms">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'">'.__('Privacy Policy').'</a>',
                                ]) !!}
                        </label>
                    </div>
                </div>
            @endif

            <x-jet-button>
                {{ __('Daftar') }}
            </x-jet-button>

            <div class="mb-3">
                <p class="small mb-0">
                        {{ __('Sudah mendaftar?') }}
                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                </p>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>