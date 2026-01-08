<nav
    x-data="{
        mobileMenuOpen: false,
        solutionsOpen: false,
        resourcesOpen: false,
        scrolled: false,
        init() {
            this.scrolled = window.scrollY > 50;
            window.addEventListener('scroll', () => {
                this.scrolled = window.scrollY > 50;
            });
        }
    }"
    @click.outside="solutionsOpen = false; resourcesOpen = false"
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
                <!-- Solutions Dropdown -->
                <div class="relative">
                    <button
                        @click="solutionsOpen = !solutionsOpen; resourcesOpen = false"
                        @mouseenter="solutionsOpen = true; resourcesOpen = false"
                        class="flex items-center gap-1 px-3 py-2 text-sm font-medium text-neutral-700 transition hover:text-primary-600 rounded hover:bg-neutral-50"
                    >
                        Solutions
                        <svg class="h-4 w-4 transition-transform" :class="solutionsOpen ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>

                    <!-- Solutions Dropdown Menu -->
                    <div
                        x-show="solutionsOpen"
                        @mouseleave="solutionsOpen = false"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-1"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-1"
                        x-cloak
                        class="absolute left-0 top-full mt-1 w-72 rounded bg-white border border-neutral-200 p-2 shadow-lg"
                    >
                        <p class="px-3 pt-2 pb-1 text-xs font-semibold uppercase tracking-wider text-neutral-500">By Industry</p>

                        <a href="{{ route('solutions.banking') }}" class="flex items-center gap-3 rounded px-3 py-2 text-sm text-neutral-700 transition hover:bg-primary-50 hover:text-primary-700">
                            <x-heroicon-o-building-library class="h-5 w-5 text-primary-600" />
                            <div>
                                <div class="font-medium">Banking & Finance</div>
                                <div class="text-xs text-neutral-500">KYC & onboarding fraud</div>
                            </div>
                        </a>
                        <a href="{{ route('solutions.insurance') }}" class="flex items-center gap-3 rounded px-3 py-2 text-sm text-neutral-700 transition hover:bg-primary-50 hover:text-primary-700">
                            <x-heroicon-o-shield-check class="h-5 w-5 text-primary-600" />
                            <div>
                                <div class="font-medium">Insurance</div>
                                <div class="text-xs text-neutral-500">Claims fraud prevention</div>
                            </div>
                        </a>
                        <a href="{{ route('solutions.government') }}" class="flex items-center gap-3 rounded px-3 py-2 text-sm text-neutral-700 transition hover:bg-primary-50 hover:text-primary-700">
                            <x-heroicon-o-building-office-2 class="h-5 w-5 text-primary-600" />
                            <div>
                                <div class="font-medium">Government</div>
                                <div class="text-xs text-neutral-500">Citizen verification</div>
                            </div>
                        </a>
                        <a href="{{ route('solutions.ecommerce') }}" class="flex items-center gap-3 rounded px-3 py-2 text-sm text-neutral-700 transition hover:bg-primary-50 hover:text-primary-700">
                            <x-heroicon-o-shopping-bag class="h-5 w-5 text-primary-600" />
                            <div>
                                <div class="font-medium">E-commerce</div>
                                <div class="text-xs text-neutral-500">Seller & product verification</div>
                            </div>
                        </a>
                        <a href="{{ route('solutions.healthcare') }}" class="flex items-center gap-3 rounded px-3 py-2 text-sm text-neutral-700 transition hover:bg-primary-50 hover:text-primary-700">
                            <x-heroicon-o-heart class="h-5 w-5 text-primary-600" />
                            <div>
                                <div class="font-medium">Healthcare</div>
                                <div class="text-xs text-neutral-500">Patient identity</div>
                            </div>
                        </a>
                        <a href="{{ route('solutions.real-estate') }}" class="flex items-center gap-3 rounded px-3 py-2 text-sm text-neutral-700 transition hover:bg-primary-50 hover:text-primary-700">
                            <x-heroicon-o-home-modern class="h-5 w-5 text-primary-600" />
                            <div>
                                <div class="font-medium">Real Estate</div>
                                <div class="text-xs text-neutral-500">Property verification</div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Technology -->
                <a href="{{ route('product') }}" class="px-3 py-2 text-sm font-medium text-neutral-700 transition hover:text-primary-600 rounded hover:bg-neutral-50">
                    Technology
                </a>

                <!-- Resources Dropdown -->
                <div class="relative">
                    <button
                        @click="resourcesOpen = !resourcesOpen; solutionsOpen = false"
                        @mouseenter="resourcesOpen = true; solutionsOpen = false"
                        class="flex items-center gap-1 px-3 py-2 text-sm font-medium text-neutral-700 transition hover:text-primary-600 rounded hover:bg-neutral-50"
                    >
                        Resources
                        <svg class="h-4 w-4 transition-transform" :class="resourcesOpen ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>

                    <!-- Resources Dropdown Menu -->
                    <div
                        x-show="resourcesOpen"
                        @mouseleave="resourcesOpen = false"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-1"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-1"
                        x-cloak
                        class="absolute left-0 top-full mt-1 w-64 rounded bg-white border border-neutral-200 p-2 shadow-lg"
                    >
                        <a href="{{ route('resources.injection-attacks') }}" class="flex items-center gap-3 rounded px-3 py-2 text-sm text-neutral-700 transition hover:bg-primary-50 hover:text-primary-700">
                            <x-heroicon-o-document-text class="h-5 w-5 text-primary-600" />
                            <div>
                                <div class="font-medium">What Are Injection Attacks?</div>
                                <div class="text-xs text-neutral-500">Technical explainer</div>
                            </div>
                        </a>
                        <a href="{{ route('resources.fraud-statistics') }}" class="flex items-center gap-3 rounded px-3 py-2 text-sm text-neutral-700 transition hover:bg-primary-50 hover:text-primary-700">
                            <x-heroicon-o-chart-bar class="h-5 w-5 text-primary-600" />
                            <div>
                                <div class="font-medium">Fraud Statistics</div>
                                <div class="text-xs text-neutral-500">Industry data & trends</div>
                            </div>
                        </a>
                        <a href="{{ route('resources.compliance') }}" class="flex items-center gap-3 rounded px-3 py-2 text-sm text-neutral-700 transition hover:bg-primary-50 hover:text-primary-700">
                            <x-heroicon-o-clipboard-document-check class="h-5 w-5 text-primary-600" />
                            <div>
                                <div class="font-medium">Compliance Guide</div>
                                <div class="text-xs text-neutral-500">Regulatory requirements</div>
                            </div>
                        </a>
                        <a href="{{ route('resources.case-studies') }}" class="flex items-center gap-3 rounded px-3 py-2 text-sm text-neutral-700 transition hover:bg-primary-50 hover:text-primary-700">
                            <x-heroicon-o-academic-cap class="h-5 w-5 text-primary-600" />
                            <div>
                                <div class="font-medium">Case Studies</div>
                                <div class="text-xs text-neutral-500">Customer success stories</div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Company -->
                <a href="{{ route('about') }}" class="px-3 py-2 text-sm font-medium text-neutral-700 transition hover:text-primary-600 rounded hover:bg-neutral-50">
                    Company
                </a>

                <!-- CTA Buttons -->
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
            <!-- Solutions Section -->
            <div class="mb-4">
                <p class="px-2 text-xs font-semibold uppercase tracking-wider text-neutral-500">Solutions</p>
                <a href="{{ route('solutions.banking') }}" class="block py-2 px-2 text-sm font-medium text-neutral-700 transition hover:text-primary-600">Banking & Finance</a>
                <a href="{{ route('solutions.insurance') }}" class="block py-2 px-2 text-sm font-medium text-neutral-700 transition hover:text-primary-600">Insurance</a>
                <a href="{{ route('solutions.government') }}" class="block py-2 px-2 text-sm font-medium text-neutral-700 transition hover:text-primary-600">Government</a>
                <a href="{{ route('solutions.ecommerce') }}" class="block py-2 px-2 text-sm font-medium text-neutral-700 transition hover:text-primary-600">E-commerce</a>
                <a href="{{ route('solutions.healthcare') }}" class="block py-2 px-2 text-sm font-medium text-neutral-700 transition hover:text-primary-600">Healthcare</a>
                <a href="{{ route('solutions.real-estate') }}" class="block py-2 px-2 text-sm font-medium text-neutral-700 transition hover:text-primary-600">Real Estate</a>
            </div>

            <!-- Platform Section -->
            <div class="mb-4 border-t border-neutral-200 pt-4">
                <p class="px-2 text-xs font-semibold uppercase tracking-wider text-neutral-500">Platform</p>
                <a href="{{ route('product') }}" class="block py-2 px-2 text-sm font-medium text-neutral-700 transition hover:text-primary-600">Technology</a>
            </div>

            <!-- Resources Section -->
            <div class="mb-4 border-t border-neutral-200 pt-4">
                <p class="px-2 text-xs font-semibold uppercase tracking-wider text-neutral-500">Resources</p>
                <a href="{{ route('resources.injection-attacks') }}" class="block py-2 px-2 text-sm font-medium text-neutral-700 transition hover:text-primary-600">What Are Injection Attacks?</a>
                <a href="{{ route('resources.fraud-statistics') }}" class="block py-2 px-2 text-sm font-medium text-neutral-700 transition hover:text-primary-600">Fraud Statistics</a>
                <a href="{{ route('resources.compliance') }}" class="block py-2 px-2 text-sm font-medium text-neutral-700 transition hover:text-primary-600">Compliance Guide</a>
                <a href="{{ route('resources.case-studies') }}" class="block py-2 px-2 text-sm font-medium text-neutral-700 transition hover:text-primary-600">Case Studies</a>
            </div>

            <!-- Other Links -->
            <div class="border-t border-neutral-200 pt-4">
                <a href="{{ route('about') }}" class="block py-2 px-2 text-sm font-medium text-neutral-700 transition hover:text-primary-600">Company</a>
                <a href="{{ route('contact') }}" class="block py-2 px-2 text-sm font-medium text-neutral-700 transition hover:text-primary-600">Contact</a>
            </div>

            <a
                href="{{ route('contact') }}"
                class="mt-4 inline-flex items-center gap-2 rounded bg-accent-500 px-4 py-2 text-sm font-semibold text-white transition hover:bg-accent-600"
            >
                Request Demo
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>
    </div>
</nav>
