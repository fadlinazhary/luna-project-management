<nav class="sidebar">
    <div class="sidebar__header">
        <a href="#" class="sidebar__logo">
            Luna PM
        </a>
    </div>
    <ul class="sidebar__menu">
        @foreach ($menus as $menu)
            <li class="sidebar__menu-item">
                <a href="{{ route($menu['route']) }}" class="sidebar__menu-link">{{ $menu['name'] }}</a>
            </li>
        @endforeach
    </ul>
</nav>
