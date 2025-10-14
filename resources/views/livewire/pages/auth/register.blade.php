<main class="auth">
    <section class="register">
        <div class="register__header">
            <h1 class="register__title">Create an Account</h1>
            <p class="register__description">Create an account for Luna</p>
            <br>
            @error('register')
                <div class="alert alert--danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="register__body">
            <form wire:submit.prevent="register" class="register__form" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-group__label">Name</label>
                    <input type="text" wire:model="name" id="name" class="form-group__input @if ($errors->has('name')) error @endif">
                    @error('name')
                        <p class="text--error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email" class="form-group__label">Email</label>
                    <input type="email" wire:model="email" id="email" class="form-group__input @if ($errors->has('email')) error @endif">
                    @error('email')
                        <p class="text--error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password" class="form-group__label">Password</label>
                    <input type="password" wire:model="password" id="password" class="form-group__input @if ($errors->has('password')) error @endif">
                    @error('password')
                        <p class="text--error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password_confirmation" class="form-group__label">Confirm Password</label>
                    <input type="password" wire:model="password_confirmation" id="password_confirmation" class="form-group__input @if ($errors->has('password_confirmation')) error @endif">
                    @error('password')
                        <p class="text--error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="button button--primary">
                        Create an Account
                    </button>
                </div>
            </form>
            <hr>
            <div class="register__footer">
                <p>Already have an account? <a href="{{ route('login') }}" class="link link--primary">Login</a></p>
            </div>
        </div>
    </section>
</main>