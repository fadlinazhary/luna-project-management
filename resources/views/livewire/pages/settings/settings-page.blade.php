<section class="mt-3">
    <h1 class="main__title">Settings</h1>

    <x-tabs :tabs="[
        'profile' => 'Profile',
        'account' => 'Account',
        'security' => 'Security',
        'notifications' => 'Notifications',
    ]" default="profile">

    @slot('profile')
        <livewire:pages.settings.profile :$user />
    @endslot

    @slot('account')
        <livewire:pages.settings.account :$user />
    @endslot

    @slot('security')
        <h1>Skibidi Toilet</h1>
    @endslot

    @slot('notifications')
        <livewire:pages.settings.notifications :$user>
    @endslot
</x-tabs>

</section>