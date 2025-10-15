<section class="topbar">
    <section class="topbar__sidebar-collapse flex">
        <x-heroicon-o-chevron-left class="w-6 h-6" />
    </section>
    <ul class="topbar__menu">
        <li class="topbar__menu-item">
            <a href="#" class="topbar__menu-link">
                <x-heroicon-o-magnifying-glass class="w-6 h-6" />
            </a>
        </li>
        <li class="topbar__menu-item">
            <a href="#" class="topbar__menu-link">
                <x-heroicon-o-bell class="w-6 h-6" />
            </a>
        </li>
        <li class="topbar__menu-item">
            <a href="{{ route('settings') }}" class="topbar__menu-link">
                 <x-heroicon-o-user-circle class="w-6 h-6" />
            </a>
        </li>
    </ul>
</section>