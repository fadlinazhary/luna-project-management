<div>
    <h1 class="text-2xl">Profile</h1>

    @if (session()->has('message'))
        <div class="alert alert--success mt-3">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="updateAvatar" class="w-1/2">
        <div class="form-group">
            <label for="" class="form-group__label">Profile Photo</label>
            <div>
                @if ($avatar)
                    <img src={{ $avatar->temporaryUrl() }}}}" alt="Preview" class="w-36 h-36 rounded-lg bg-white shadow-sm">
                @elseif ($user->profile->avatar)
                    <img src="{{ asset('storage/' . $user->profile->avatar) }}" alt="Profile" class="w-36 h-36 rounded-lg bg-white shadow-sm object-cover">
                @else
                    <img src="{{ Vite::asset('resources/images/account.svg') }}" alt="Default" class="w-36 h-36 rounded-lg bg-white shadow-sm">
                @endif
            </div>

            <div class="mt-4">
                <input type="file" wire:model="avatar" accept="image/*">
                @error('avatar') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="flex mt-4 space-x-2">
                <button class="button button--primary w-36">Change Photo</button>
                <button wire:click="deleteAvatar" class="button button--danger w-36">
                    <span wire:loading>Deleting...</span>
                    <span wire:loading.remove>Delete Photo</span>
                </button>
            </div>
        </div>
    </form>

    <form wire:submit.prevent="updateProfile" class="w-1/2">
        @csrf
        <div class="form-group">
            <label for="" class="form-group__label">Name</label>
            <input type="text" wire:model="name" class="form-group__input">
        </div>

        <div class="form-group">
            <label for="" class="form-group__label">Username</label>
            <input type="text" wire:model="username" class="form-group__input" disabled>
        </div>

        <div class="form-group">
            <label for="bio" class="form-group__label">About Me</label>
            <textarea wire:model="bio" id="bio" cols="30" rows="5" class="form-group__input">{!! $user->profile->bio !!}</textarea>
        </div>

        <div class="form-group w-36">
            <button type="submit" class="button button--primary">
                <span wire:loading.remove>Save</span>
                <span wire:loading>Saving...</span>
            </button>
        </div>
    </form>
</div>
