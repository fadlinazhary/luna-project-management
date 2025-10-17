<nav class="sidebar">
    <div class="sidebar__header">
        <a href="#" class="sidebar__logo">
            Luna PM
        </a>
    </div>
    <ul class="sidebar__menu">
        @foreach ($menus as $menu)
            <li class="sidebar__menu-item">
                <a href="{{ route($menu['route']) }}" class="sidebar__menu-link {{ $currentRoute === $menu['route'] ? 'sidebar__menu-link--active' : '' }}">
                    @if ($menu['icon'])
                        <x-dynamic-component :component="'heroicon-'.$menu['icon']" class="sidebar__menu-icon" />
                    @endif    
                    <span class="sidebar__menu-text">{{ $menu['name'] }}</span>
                </a>
            </li>
        @endforeach
    </ul>
</nav>
