<div>
    <h1 class="text-2xl">Account</h1>

    @if (session()->has('message'))
        <div class="alert alert--success mt-3">
            {{ session('message') }}
        </div>
    @endif

    <section class="mt-3 w-1/2">
        <h2 class="text-xl">Change Email</h2>
        <form>
            <div class="form-group">
                <label for="" class="form-group__label">Email Address</label>
                <input type="email" wire:model="email" class="form-group__input" />
            </div>
            <div class="form-group">
                <button type="submit" class="button button--primary w-36">Change Email</button>
            </div>
        </form>
    </section>

    <section class="mt-3 w-1/2">
        <h2 class="text-xl">Change Password</h2>
        <form>
            <div class="form-group">
                <label for="password" class="form-group__label">Password</label>
                <input type="password" id="password" wire:model="password" class="form-group__input" />
            </div>
            <div class="form-group">
                <label for="password_confirmation" class="form-group__label">Confirm Password</label>
                <input type="password" id="password_confirmation" wire:model="password_confirmation" class="form-group__input" />
            </div>
            <div class="form-group">
                <button type="submit" class="button button--primary w-36">Change Email</button>
            </div>
        </form>
    </section>

    <hr class="bg-gray-600">

    <div x-data="{ openModal: false }">
        <section id="dangerous-zone" class="alert alert--danger space-y-2">
            <h1 class="text-xl">Dangerous Zone</h1>
            <p>This action will have consequences!</p>

            <button class="button button--danger" @click="openModal = true">Delete My Account</button>
        </section>

        <x-modal x-model="openModal"
            x-data="{ emailInput: '', requiredEmail: '{{ $user->email }}' }">
                <x-slot name="title">Delete Account?</x-slot>

                <div>
                    <p>Are you sure want to delete your account?</p>
                </div>
                
                <x-slot name="footer">
                    <button
                        @click="openModal = false" class="button">Cancel</button>
                    
                    <button wire:click="deleteAccount" class="button button--danger">Delete Account</button>
                </x-slot>
        </x-modal>
    </div>

</div>
