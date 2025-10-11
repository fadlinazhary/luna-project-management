<main class="auth">
    <section class="register">
        <div class="register__header">
            <h1 class="register__title">Create an Account</h1>
            <p class="register__description">Create an account for Luna</p>
        </div>
        <div class="register__body">
            <form action="#" class="register__form" method="POST">
                @csrf
                <div class="form-group">
                    <label for="full_name" class="form-group__label">Full Name</label>
                    <input type="text" name="full_name" id="full_name" class="form-group__input">
                </div>
                <div class="form-group">
                    <label for="email" class="form-group__label">Email</label>
                    <input type="email" name="email" id="email" class="form-group__input">
                </div>
                <div class="form-group">
                    <label for="password" class="form-group__label">Password</label>
                    <input type="password" name="password" id="password" class="form-group__input">
                </div>
                <div class="form-group">
                    <label for="password_confirmation" class="form-group__label">Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-group__input">
                </div>
                <div class="form-group">
                    <button type="submit" class="button button--primary">
                        Create an Account
                    </button>
                </div>
            </form>
            <hr>
            <div class="register__footer">
                <p>Already have an account? <a href="#" class="link link--primary">Login</a></p>
            </div>
        </div>
    </section>
</main>