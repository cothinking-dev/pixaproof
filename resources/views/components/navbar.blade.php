<nav
    x-data="{
        mobileMenuOpen: false,
        productOpen: false,
        enterpriseOpen: false,
        scrolled: false,
        init() {
            this.scrolled = window.scrollY > 50;
            window.addEventListener('scroll', () => {
                this.scrolled = window.scrollY > 50;
            });
        }
    }"
    @click.outside="productOpen = false; enterpriseOpen = false"
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
            <div class="hidden items-center gap-1 lg:flex">
                <!-- Product Dropdown -->
                <div class="relative">
                    <button
                        @click="productOpen = !productOpen; enterpriseOpen = false"
                        @mouseenter="productOpen = true; enterpriseOpen = false"
                        class="flex items-center gap-1 px-3 py-2 text-sm font-medium text-gray-300 transition hover:text-white rounded-lg hover:bg-surface-800/50"
                    >
                        Product
                        <svg class="h-4 w-4 transition-transform" :class="productOpen ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>

                    <!-- Product Dropdown Menu -->
                    <div
                        x-show="productOpen"
                        @mouseleave="productOpen = false"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-1"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-1"
                        x-cloak
                        class="absolute left-0 top-full mt-1 w-64 rounded-xl bg-surface-800 border border-surface-700 p-2 shadow-xl shadow-black/20"
                    >
                        <a href="/" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm text-gray-300 transition hover:bg-surface-700 hover:text-white">
                            <x-heroicon-o-device-phone-mobile class="h-5 w-5 text-brand-500" />
                            <div>
                                <div class="font-medium">Community Edition</div>
                                <div class="text-xs text-gray-500">Free app for individuals</div>
                            </div>
                        </a>
                        <a href="/how-it-works" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm text-gray-300 transition hover:bg-surface-700 hover:text-white">
                            <x-heroicon-o-arrow-path class="h-5 w-5 text-brand-500" />
                            <div>
                                <div class="font-medium">How It Works</div>
                                <div class="text-xs text-gray-500">Submitter & Verifier flow</div>
                            </div>
                        </a>
                        <a href="{{ route('product') }}" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm text-gray-300 transition hover:bg-surface-700 hover:text-white">
                            <x-heroicon-o-cpu-chip class="h-5 w-5 text-brand-500" />
                            <div>
                                <div class="font-medium">Technology</div>
                                <div class="text-xs text-gray-500">PIEA™ verification</div>
                            </div>
                        </a>
                        <a href="/pricing" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm text-gray-300 transition hover:bg-surface-700 hover:text-white">
                            <x-heroicon-o-credit-card class="h-5 w-5 text-brand-500" />
                            <div>
                                <div class="font-medium">Pricing</div>
                                <div class="text-xs text-gray-500">Free, Standard, Pro tiers</div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Enterprise Solutions Dropdown -->
                <div class="relative">
                    <button
                        @click="enterpriseOpen = !enterpriseOpen; productOpen = false"
                        @mouseenter="enterpriseOpen = true; productOpen = false"
                        class="flex items-center gap-1 px-3 py-2 text-sm font-medium text-gray-300 transition hover:text-white rounded-lg hover:bg-surface-800/50"
                    >
                        Enterprise
                        <svg class="h-4 w-4 transition-transform" :class="enterpriseOpen ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>

                    <!-- Enterprise Dropdown Menu -->
                    <div
                        x-show="enterpriseOpen"
                        @mouseleave="enterpriseOpen = false"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-1"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-1"
                        x-cloak
                        class="absolute left-0 top-full mt-1 w-72 rounded-xl bg-surface-800 border border-surface-700 p-2 shadow-xl shadow-black/20"
                    >
                        <a href="/enterprise" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm text-gray-300 transition hover:bg-surface-700 hover:text-white border-b border-surface-700 mb-1">
                            <x-heroicon-o-building-office class="h-5 w-5 text-brand-500" />
                            <div>
                                <div class="font-medium">Overview</div>
                                <div class="text-xs text-gray-500">Why enterprises choose PixaProof</div>
                            </div>
                        </a>

                        <p class="px-3 pt-2 pb-1 text-xs font-semibold uppercase tracking-wider text-gray-500">Industries</p>

                        <a href="{{ route('solutions.banking') }}" class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm text-gray-300 transition hover:bg-surface-700 hover:text-white">
                            <x-heroicon-o-building-library class="h-5 w-5 text-brand-500" />
                            <div>
                                <div class="font-medium">Banking & Finance</div>
                                <div class="text-xs text-gray-500">KYC & identity verification</div>
                            </div>
                        </a>
                        <a href="{{ route('solutions.insurance') }}" class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm text-gray-300 transition hover:bg-surface-700 hover:text-white">
                            <x-heroicon-o-shield-check class="h-5 w-5 text-brand-500" />
                            <div>
                                <div class="font-medium">Insurance</div>
                                <div class="text-xs text-gray-500">Claims fraud prevention</div>
                            </div>
                        </a>
                        <a href="{{ route('solutions.government') }}" class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm text-gray-300 transition hover:bg-surface-700 hover:text-white">
                            <x-heroicon-o-building-office-2 class="h-5 w-5 text-brand-500" />
                            <div>
                                <div class="font-medium">Government</div>
                                <div class="text-xs text-gray-500">Citizen verification</div>
                            </div>
                        </a>
                        <a href="{{ route('solutions.ecommerce') }}" class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm text-gray-300 transition hover:bg-surface-700 hover:text-white">
                            <x-heroicon-o-shopping-bag class="h-5 w-5 text-brand-500" />
                            <div>
                                <div class="font-medium">E-commerce</div>
                                <div class="text-xs text-gray-500">Product photo verification</div>
                            </div>
                        </a>
                        <a href="{{ route('solutions.healthcare') }}" class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm text-gray-300 transition hover:bg-surface-700 hover:text-white">
                            <x-heroicon-o-heart class="h-5 w-5 text-brand-500" />
                            <div>
                                <div class="font-medium">Healthcare</div>
                                <div class="text-xs text-gray-500">Patient identity verification</div>
                            </div>
                        </a>

                        <div class="border-t border-surface-700 mt-1 pt-1">
                            <a href="{{ route('developers') }}" class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm text-gray-300 transition hover:bg-surface-700 hover:text-white">
                                <x-heroicon-o-code-bracket class="h-5 w-5 text-brand-500" />
                                <div>
                                    <div class="font-medium">Developers</div>
                                    <div class="text-xs text-gray-500">SDK & API documentation</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('about') }}" class="px-3 py-2 text-sm font-medium text-gray-300 transition hover:text-white rounded-lg hover:bg-surface-800/50">
                    About
                </a>

                <!-- CTA Buttons -->
                <div class="flex items-center gap-3 ml-4">
                    <a
                        href="{{ route('contact') }}"
                        class="text-sm font-medium text-gray-300 transition hover:text-white"
                    >
                        Contact
                    </a>
                    <a
                        href="/"
                        class="inline-flex items-center gap-2 rounded-lg bg-brand-500 px-4 py-2 text-sm font-semibold text-surface-950 transition hover:bg-brand-400"
                    >
                        Download App
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="flex items-center gap-2 lg:hidden">
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
        <div x-show="mobileMenuOpen" x-collapse x-cloak class="border-t border-surface-700 py-4 lg:hidden">
            <!-- Product Section -->
            <div class="mb-4">
                <p class="px-2 text-xs font-semibold uppercase tracking-wider text-gray-500">Product</p>
                <a href="/" class="block py-2 px-2 text-sm font-medium text-gray-300 transition hover:text-white">Community Edition</a>
                <a href="/how-it-works" class="block py-2 px-2 text-sm font-medium text-gray-300 transition hover:text-white">How It Works</a>
                <a href="{{ route('product') }}" class="block py-2 px-2 text-sm font-medium text-gray-300 transition hover:text-white">Technology</a>
                <a href="/pricing" class="block py-2 px-2 text-sm font-medium text-gray-300 transition hover:text-white">Pricing</a>
            </div>

            <!-- Enterprise Section -->
            <div class="mb-4 border-t border-surface-700 pt-4">
                <p class="px-2 text-xs font-semibold uppercase tracking-wider text-gray-500">Enterprise</p>
                <a href="/enterprise" class="block py-2 px-2 text-sm font-medium text-gray-300 transition hover:text-white">Overview</a>
                <a href="{{ route('solutions.banking') }}" class="block py-2 px-2 text-sm font-medium text-gray-300 transition hover:text-white">Banking & Finance</a>
                <a href="{{ route('solutions.insurance') }}" class="block py-2 px-2 text-sm font-medium text-gray-300 transition hover:text-white">Insurance</a>
                <a href="{{ route('solutions.government') }}" class="block py-2 px-2 text-sm font-medium text-gray-300 transition hover:text-white">Government</a>
                <a href="{{ route('solutions.ecommerce') }}" class="block py-2 px-2 text-sm font-medium text-gray-300 transition hover:text-white">E-commerce</a>
                <a href="{{ route('solutions.healthcare') }}" class="block py-2 px-2 text-sm font-medium text-gray-300 transition hover:text-white">Healthcare</a>
                <a href="{{ route('developers') }}" class="block py-2 px-2 text-sm font-medium text-gray-300 transition hover:text-white">Developers</a>
            </div>

            <!-- Other Links -->
            <div class="border-t border-surface-700 pt-4">
                <a href="{{ route('about') }}" class="block py-2 px-2 text-sm font-medium text-gray-300 transition hover:text-white">About</a>
                <a href="{{ route('contact') }}" class="block py-2 px-2 text-sm font-medium text-gray-300 transition hover:text-white">Contact</a>
            </div>

            <a
                href="/"
                class="mt-4 inline-flex items-center gap-2 rounded-lg bg-brand-500 px-4 py-2 text-sm font-semibold text-surface-950 transition hover:bg-brand-400"
            >
                Download App
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                </svg>
            </a>
        </div>
    </div>
</nav>
