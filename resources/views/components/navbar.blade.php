<nav
    x-data="{
        mobileMenuOpen: false,
        scrolled: false,
        init() {
            this.scrolled = window.scrollY > 50;
            window.addEventListener('scroll', () => {
                this.scrolled = window.scrollY > 50;
            });
        }
    }"
    :class="scrolled ? 'bg-surface-900/95 backdrop-blur-sm border-b border-surface-700' : 'bg-transparent'"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-2">
                <span class="text-xl font-bold text-white">PixaProof</span>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden items-center gap-8 md:flex">
                <a href="{{ route('home') }}" class="text-sm font-medium text-gray-300 transition hover:text-white">
                    Home
                </a>
                <a href="{{ route('about') }}" class="text-sm font-medium text-gray-300 transition hover:text-white">
                    About
                </a>
                <a href="{{ route('contact') }}" class="text-sm font-medium text-gray-300 transition hover:text-white">
                    Contact
                </a>

                <!-- CTA Button -->
                <a
                    href="{{ route('contact') }}"
                    class="inline-flex items-center gap-2 rounded-lg bg-brand-500 px-4 py-2 text-sm font-semibold text-white transition hover:bg-brand-600"
                >
                    Get Started
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="flex items-center gap-2 md:hidden">
                <button
                    @click="mobileMenuOpen = !mobileMenuOpen"
                    type="button"
                    class="rounded-lg p-2 text-gray-300 transition hover:bg-surface-800 hover:text-white"
                >
                    <svg x-show="!mobileMenuOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg x-show="mobileMenuOpen" x-cloak class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div x-show="mobileMenuOpen" x-collapse x-cloak class="border-t border-surface-700 py-4 md:hidden">
            <a href="{{ route('home') }}" class="block py-2 text-sm font-medium text-gray-300 transition hover:text-white">Home</a>
            <a href="{{ route('about') }}" class="block py-2 text-sm font-medium text-gray-300 transition hover:text-white">About</a>
            <a href="{{ route('contact') }}" class="block py-2 text-sm font-medium text-gray-300 transition hover:text-white">Contact</a>
            <a
                href="{{ route('contact') }}"
                class="mt-4 inline-flex items-center gap-2 rounded-lg bg-brand-500 px-4 py-2 text-sm font-semibold text-white transition hover:bg-brand-600"
            >
                Get Started
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>
    </div>
</nav>
