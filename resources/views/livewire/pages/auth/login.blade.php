<main class="auth">
    <section class="login">
        <div class="login__header">
            <h1 class="login__title">Login</h1>
            <p class="login__description">Login to Luna Project Management</p>
            <br>
            @if (session()->has('message'))
                <div class="alert alert--success">
                    {{ session('message') }}
                </div>
            @endif
            @error('login')
                <div class="alert alert--danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="login__body">
            <form wire:submit.prevent="login" class="login__form">
                @csrf
                <div class="form-group">
                    <label for="email" class="form-group__label login__label">Email</label>
                    <input type="email" wire:model="email" id="email" class="form-group__input login__input @error('email') error @enderror">
                </div>
                <div class="form-group">
                    <label for="password" class="form-group__label login__label">Password</label>
                    <input type="password" wire:model="password" id="password" class="form-group__input login__input @error('password') error @enderror">
                </div>
                <div class="form-group">
                    <button type="submit" class="button button--primary" wire:loading.attr="disabled">
                        Login
                    </button>
                </div>
            </form>
            <hr>
            <div class="login__footer">
                <p>Don't have an account? <a href="/register" class="link link--primary">Register</a></p>
            </div>
        </div>
    </section>
</main>