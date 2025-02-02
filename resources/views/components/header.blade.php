<header class="bg-success text-white p-3">
    <div class="container mx-auto d-flex justify-content-between align-items-center">
        <h1 class="fs-3 fw-semibold">
            <a href="{{ url('/') }}"><i class="fa fa-code" aria-hidden="true"></i> Sviluppobio.it</a>
        </h1>
        <nav class="d-none d-md-flex align-items-center">
            <x-nav-link url="/" :active="request()->is('/')"><i class="fa fa-home" aria-hidden="true"></i></x-nav-link>
            <x-nav-link url="/jobs" :active="request()->is('jobs')"><i class="fa fa-tasks" aria-hidden="true"></i></x-nav-link>
            @auth()
                <x-nav-link url="/bookmarks" :active="request()->is('jobs/saved')">Saved Jobs</x-nav-link>  
                <x-nav-link url="/dashboard" :active="request()->is('dashboard')" icon="gauge">Dashboard</x-nav-link>
                <x-logout-button />
            
                <x-button-link url="/jobs/create" icon="edit">Create Job</x-button-link>
                <!-- User Avatar -->
                <div class="flex items-center space-x-3">
                    <a href="{{ route('dashboard.index') }}">
                        @if(Auth::user()->avatar)
                            <img
                                src="{{ asset('storage/' . Auth::user()->avatar) }}"
                                alt="{{ Auth::user()->name }}"
                                class="w-10 h-10 rounded-full"
                            />
                        @else
                            <img
                                src="{{ asset('storage/avatars/default-avatar.png') }}"
                                alt="{{ Auth::user()->name }}"
                                class="w-10 h-10 rounded-full"
                            />
                        @endif
                    </a>
                </div>
            @else
                <x-nav-link url="/login" :active="request()->is('login')"><i class="fa fa-sign-in" aria-hidden="true"></i></x-nav-link>
            @endauth
        </nav>
        <button id="hamburger" class="text-white d-flex d-md-none align-items-center">
            <i class="fa fa-bars fs-2"></i>
        </button>
    </div>
    <!-- Mobile Menu -->
    {{-- <nav id="mobile-menu" class="hidden md:hidden bg-blue-900 text-white mt-5 pb-4 space-y-2">
        <x-nav-link url="/jobs" :active="request()->is('jobs')" :mobile="true">All Jobs</x-nav-link>
        @auth()
            <x-nav-link url="/jobs/saved" :active="request()->is('jobs/saved')" :mobile="true">Saved Jobs</x-nav-link>  
            <x-nav-link url="/dashboard" :active="request()->is('dashboard')" :mobile="true">Dashbaord</x-nav-link>
            <x-logout-button />
            <div class="pt-2"></div>
            <x-button-link url="/jobs/create" icon="edit" :block="true">Create Job</x-button-link>
        @else
            <x-nav-link url="/login" :active="request()->is('login')" :mobile="true">Login</x-nav-link>
            <x-nav-link url="/register" :active="request()->is('register')" :mobile="true">Register</x-nav-link>
        @endauth
    </nav> --}}
</header>