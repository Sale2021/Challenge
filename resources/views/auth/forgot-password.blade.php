<x-guest-layout>
    <div class="container container-tight">
        <div class="text-center mb-4">
            <x-logo />
        </div>
        <form class="card card-md needs-validation" action="{{ route('password.email') }}" method="post"
            autocomplete="off" novalidate>

            @error('email')
            <div class="alert alert-important alert-danger alert-dismissible" role="alert">
                <div class="d-flex">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-circle"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                            <path d="M12 8v4"></path>
                            <path d="M12 16h.01"></path>
                        </svg>
                    </div>
                    <div>
                        {{ $message }}
                    </div>
                </div>
                <a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
            </div>
            @enderror
            @csrf
            <div class="card-body">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <div class="col-12">
                    <div class="card-body">
                        <h2 class=" text-center mb-4"> Mot de passe oublié</h2>
                        <p class="text-muted mb-4">Entrez votre adresse e-mail et nous vous enverrons
                            par e-mail un lien de réinitialisation de mot de passe qui vous permettra d'en choisir un
                            nouveau.
                        </p>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" required class="form-control"
                                placeholder="Entrez votre email">
                        </div>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">Ce champ est obligatoire.</div>
                    </div>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Valider</button>
                </div>
                @if (Session::has('two_factor:user_id'))
                <div class="text-center text-muted mt-3">
                    <a href="{{ route('2fa_verify_code') }}">Envoyez-moi un nouveau code</a>
                </div>
                @endif
            </div>
        </form>
    </div>
</x-guest-layout>