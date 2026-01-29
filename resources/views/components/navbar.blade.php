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
    :class="scrolled ? 'bg-white/95 backdrop-blur-sm shadow-sm' : 'bg-white'"
    class="fixed top-0 left-0 right-0 z-50 border-b border-neutral-200 transition-all duration-300"
>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-2">
                <span class="text-xl font-bold text-neutral-900">PixaProof</span>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden items-center gap-1 lg:flex">
                <!-- Home -->
                <a href="{{ route('home') }}" class="px-3 py-2 text-sm font-medium text-neutral-700 transition hover:text-primary-600 rounded hover:bg-neutral-50">
                    Home
                </a>

                <!-- Solutions (anchor link) -->
                <a href="#solutions" class="px-3 py-2 text-sm font-medium text-neutral-700 transition hover:text-primary-600 rounded hover:bg-neutral-50">
                    Solutions
                </a>

                <!-- Technology (anchor link) -->
                <a href="#technology" class="px-3 py-2 text-sm font-medium text-neutral-700 transition hover:text-primary-600 rounded hover:bg-neutral-50">
                    Technology
                </a>

                <!-- About (anchor link) -->
                <a href="#about" class="px-3 py-2 text-sm font-medium text-neutral-700 transition hover:text-primary-600 rounded hover:bg-neutral-50">
                    About
                </a>

                <!-- Request Demo CTA Button -->
                <div class="flex items-center gap-3 ml-4">
                    <a
                        href="{{ route('contact') }}"
                        class="inline-flex items-center gap-2 rounded bg-accent-500 px-4 py-2 text-sm font-semibold text-white transition hover:bg-accent-600"
                    >
                        Request Demo
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="flex items-center gap-2 lg:hidden">
                <button
                    @click="mobileMenuOpen = !mobileMenuOpen"
                    type="button"
                    class="rounded p-2 text-neutral-700 transition hover:bg-neutral-100"
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
        <div x-show="mobileMenuOpen" x-collapse x-cloak class="border-t border-neutral-200 py-4 lg:hidden">
            <a href="{{ route('home') }}" @click="mobileMenuOpen = false" class="block py-2 px-2 text-sm font-medium text-neutral-700 transition hover:text-primary-600">
                Home
            </a>
            <a href="#solutions" @click="mobileMenuOpen = false" class="block py-2 px-2 text-sm font-medium text-neutral-700 transition hover:text-primary-600">
                Solutions
            </a>
            <a href="#technology" @click="mobileMenuOpen = false" class="block py-2 px-2 text-sm font-medium text-neutral-700 transition hover:text-primary-600">
                Technology
            </a>
            <a href="#about" @click="mobileMenuOpen = false" class="block py-2 px-2 text-sm font-medium text-neutral-700 transition hover:text-primary-600">
                About
            </a>

            <div class="mt-4 pt-4 border-t border-neutral-200">
                <a
                    href="{{ route('contact') }}"
                    class="inline-flex items-center gap-2 rounded bg-accent-500 px-4 py-2 text-sm font-semibold text-white transition hover:bg-accent-600"
                >
                    Request Demo
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</nav>
