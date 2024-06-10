<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">

    @if (Auth::check())
        @if (Auth::user()->user_type == 'user')
            <x-sidebar.link title="Dashboard" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')">
                <x-slot name="icon">
                    <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
                </x-slot>
            </x-sidebar.link>
        @else
            <x-sidebar.link title="Dashboard" href="{{ route('admin.dashboard') }}" :isActive="request()->routeIs('dashboard')">
                <x-slot name="icon">
                    <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
                </x-slot>
            </x-sidebar.link>
        @endif
    @endif


    <x-sidebar.dropdown title="Buttons" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink title="Text button" href="{{ route('buttons.text') }}" :active="request()->routeIs('buttons.text')" />

        <x-sidebar.sublink title="Icon button" href="{{ route('buttons.icon') }}" :active="request()->routeIs('buttons.icon')" />

        <x-sidebar.sublink title="Text with icon" href="{{ route('buttons.text-icon') }}" :active="request()->routeIs('buttons.text-icon')" />
    </x-sidebar.dropdown>

    <div x-transition x-show="isSidebarOpen || isSidebarHovered" class="text-sm text-gray-500">
        Dummy Links
    </div>


    @if (Auth::check())
        @if (Auth::user()->user_type === 'user')
            <!-- Link 1: Chat Icon -->
            <x-sidebar.link title="Chat" href="#">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                    </svg>
                </x-slot>
            </x-sidebar.link>
        @endif
    @endif


    <!-- Link 2: Dummy Link 1 Icon -->
    <x-sidebar.link title="Dummy link 1" href="#">
        <x-slot name="icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"
                class="flex-shrink-0 w-6 h-6" aria-hidden="true">
                <path
                    d="M20.3149 15.4442C20.7672 14.3522 21 13.1819 21 12C21 9.61305 20.0518 7.32387 18.364 5.63604C16.6761 3.94821 14.3869 3 12 3C9.61305 3 7.32387 3.94821 5.63604 5.63604C3.94821 7.32387 3 9.61305 3 12C3 13.1819 3.23279 14.3522 3.68508 15.4442C4.13738 16.5361 4.80031 17.5282 5.63604 18.364C6.47177 19.1997 7.46392 19.8626 8.55585 20.3149C9.64778 20.7672 10.8181 21 12 21C13.1819 21 14.3522 20.7672 15.4442 20.3149C16.5361 19.8626 17.5282 19.1997 18.364 18.364C19.1997 17.5282 19.8626 16.5361 20.3149 15.4442Z"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </x-slot>
    </x-sidebar.link>

</x-perfect-scrollbar>
