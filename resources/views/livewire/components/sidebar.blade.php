<nav 
    x-data="{ collapsed: JSON.parse(localStorage.getItem('sidebarCollapsed') || 'false') }"
    x-init="$watch('collapsed', value => localStorage.setItem('sidebarCollapsed', JSON.stringify(value)))"
    x-cloak
    class="sidebar relative"
    :class="collapsed ? 'sidebar--collapsed' : ''">
    <div class="sidebar__header">
        <a 
            href="#" 
            class="sidebar__logo relative" 
            x-show="!collapsed" 
            x-transition
            >
            Luna PM
        </a>
    </div>
    <button 
            @click="collapsed = !collapsed" 
            class="p-2 rounded-full absolute top-4 -right-4 hover:bg-gray-100 focus:outline-none bg-white"
            title="Toggle sidebar"
        >
            <x-heroicon-o-bars-3 class="w-5 h-5" />
    </button>
    <ul class="sidebar__menu">
        @foreach ($menus as $menu)
            <li class="sidebar__menu-item relative group">
                <a href="{{ route($menu['route']) }}" class="sidebar__menu-link {{ $currentRoute === $menu['route'] ? 'sidebar__menu-link--active' : '' }}">
                    @if ($menu['icon'])
                        <x-dynamic-component :component="'heroicon-'.$menu['icon']" class="sidebar__menu-icon" />
                    @endif    
                    
                    <span class="sidebar__menu-text" x-show="!collapsed" x-transition>{{ $menu['name'] }}</span>
                </a>

                <div 
                    x-cloak
                    :class="collapsed ? 'opacity-0 group-hover:opacity-100' : 'hidden' "
                    class="absolute left-full top-1/2 -translate-y-1/2 ml-2 px-2 py-1 text-sm font-medium rounded-md bg-gray-800 text-white whitespace-nowrap transition-opacity pointer-events-none"
                >
                    {{ $menu['name'] }}
                </div>
            </li>
        @endforeach
    </ul>
</nav>
