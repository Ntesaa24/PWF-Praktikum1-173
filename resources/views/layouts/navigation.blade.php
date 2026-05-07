<nav x-data="{ open: false }" class="bg-[#131520]/80 border-b border-white/5 backdrop-blur-xl sticky top-0 z-50" style="background-color: #131520;">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3 group">
                        <div class="p-2 bg-indigo-500/10 rounded-xl group-hover:bg-indigo-500/20 transition-all duration-300">
                             <x-application-logo class="block h-8 w-auto fill-current text-indigo-500" />
                        </div>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-4 sm:ms-12 sm:flex h-full capitalize">
                    @php
                        $links = [
                            ['name' => 'Dashboard', 'route' => 'dashboard'],
                            ['name' => 'Product', 'route' => 'product.index', 'activePattern' => 'product.*'],
                            ['name' => 'Category', 'route' => 'categories.index', 'activePattern' => 'categories.*'],
                            ['name' => 'About', 'route' => 'about'],
                        ];
                    @endphp

                    @foreach($links as $link)
                        @if($link['name'] !== 'Category' || Auth::user()->can('manage-categories'))
                            <a href="{{ route($link['route']) }}" 
                               class="inline-flex items-center px-4 pt-1 border-b-2 text-sm font-medium leading-5 transition duration-150 ease-in-out h-full
                               {{ request()->routeIs($link['activePattern'] ?? $link['route']) 
                                  ? 'border-indigo-500 text-white' 
                                  : 'border-transparent text-slate-400 hover:text-slate-200 hover:border-slate-700' }}">
                                {{ __($link['name']) }}
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-4 py-2 border border-white/5 text-sm leading-4 font-medium rounded-xl text-slate-300 bg-white/5 hover:bg-white/10 hover:text-white focus:outline-none transition ease-in-out duration-150">
                            <div class="flex items-center gap-3">
                                <span class="w-8 h-8 rounded-full bg-indigo-500/20 text-indigo-400 flex items-center justify-center border border-indigo-500/30">
                                    {{ substr(Auth::user()->name, 0, 1) }}
                                </span>
                                <div>{{ Auth::user()->name }}</div>
                            </div>

                            <div class="ms-2">
                                <svg class="fill-current h-4 w-4 opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content" class="bg-[#1c1f2e] border border-white/5 shadow-2xl">
                        <div class="px-4 py-3 border-b border-white/5">
                            <p class="text-xs text-slate-500 font-medium uppercase tracking-wider">Manage Account</p>
                        </div>
                        <x-dropdown-link :href="route('profile.edit')" class="text-slate-300 hover:bg-white/5 hover:text-white">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    class="text-red-400 hover:bg-red-500/10 hover:text-red-300"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-xl text-slate-400 hover:text-white hover:bg-white/5 focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden border-t border-white/5 bg-[#131520]/95 backdrop-blur-xl">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('product.index')" :active="request()->routeIs('product.*')">
                {{ __('Product') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')">
                {{ __('About') }}
            </x-responsive-nav-link>
            @can('manage-categories')
                <x-responsive-nav-link :href="route('categories.index')" :active="request()->routeIs('categories.*')">
                    {{ __('Category') }}
                </x-responsive-nav-link>
            @endcan
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-white/5">
            <div class="px-4 flex items-center gap-3">
                <span class="w-10 h-10 rounded-full bg-indigo-500/20 text-indigo-400 flex items-center justify-center border border-indigo-500/30">
                    {{ substr(Auth::user()->name, 0, 1) }}
                </span>
                <div>
                    <div class="font-medium text-base text-slate-200">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-slate-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                            class="text-red-400"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
