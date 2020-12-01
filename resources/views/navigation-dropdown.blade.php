<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <img src="/logo.png" width="150px" height="50px">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-jet-nav-link>

                    <x-jet-nav-link href="{{ route('volunter.create') }}" :active="request()->routeIs('dashboard')">
                        {{ __(' Add volunter') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('volunter.index') }}" :active="request()->routeIs('dashboard')">
                        {{ __('volunter') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('department.index') }}" :active="request()->routeIs('dashboard')">
                        {{ __('departments') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('department.create') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Add Department') }}
                    </x-jet-nav-link>
                </div>
            </div>
        </div>
    </div>
</nav>