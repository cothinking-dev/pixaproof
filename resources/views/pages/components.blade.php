@extends('layouts.app')

@section('title', 'Component Library')

@section('content')
    {{-- Header --}}
    <x-section bg="gradient" class="pt-24">
        <div class="text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-500">Design System</p>
            <h1 class="mt-2 text-4xl font-bold text-white md:text-5xl">Component Library</h1>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-gray-300">
                Preview of all available components for the PixaProof website.
            </p>
        </div>
    </x-section>

    {{-- Table of Contents --}}
    <x-section>
        <div class="rounded-xl border border-surface-700 bg-surface-800 p-6">
            <h2 class="text-lg font-semibold text-white">Contents</h2>
            <div class="mt-4 flex flex-wrap gap-2">
                <a href="#colors" class="rounded-lg bg-surface-700 px-3 py-1.5 text-sm text-gray-300 transition hover:bg-surface-600 hover:text-white">Colors</a>
                <a href="#typography" class="rounded-lg bg-surface-700 px-3 py-1.5 text-sm text-gray-300 transition hover:bg-surface-600 hover:text-white">Typography</a>
                <a href="#buttons" class="rounded-lg bg-surface-700 px-3 py-1.5 text-sm text-gray-300 transition hover:bg-surface-600 hover:text-white">Buttons</a>
                <a href="#cards" class="rounded-lg bg-surface-700 px-3 py-1.5 text-sm text-gray-300 transition hover:bg-surface-600 hover:text-white">Cards</a>
                <a href="#sections" class="rounded-lg bg-surface-700 px-3 py-1.5 text-sm text-gray-300 transition hover:bg-surface-600 hover:text-white">Sections</a>
                <a href="#patterns" class="rounded-lg bg-surface-700 px-3 py-1.5 text-sm text-gray-300 transition hover:bg-surface-600 hover:text-white">Patterns</a>
            </div>
        </div>
    </x-section>

    {{-- Colors --}}
    <x-section id="colors">
        <h2 class="text-2xl font-bold text-white">Colors</h2>
        <p class="mt-2 text-gray-400">Brand and surface color palettes.</p>

        <div class="mt-8 space-y-8">
            {{-- Brand Colors --}}
            <div>
                <h3 class="text-lg font-semibold text-white">Brand (Red)</h3>
                <div class="mt-4 grid grid-cols-5 gap-2 md:grid-cols-11">
                    @foreach([50, 100, 200, 300, 400, 500, 600, 700, 800, 900, 950] as $shade)
                        <div class="text-center">
                            <div class="h-12 w-full rounded-lg bg-brand-{{ $shade }}"></div>
                            <p class="mt-1 text-xs text-gray-400">{{ $shade }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Surface Colors --}}
            <div>
                <h3 class="text-lg font-semibold text-white">Surface (Dark)</h3>
                <div class="mt-4 grid grid-cols-5 gap-2 md:grid-cols-11">
                    @foreach([50, 100, 200, 300, 400, 500, 600, 700, 800, 900, 950] as $shade)
                        <div class="text-center">
                            <div class="h-12 w-full rounded-lg border border-surface-600 bg-surface-{{ $shade }}"></div>
                            <p class="mt-1 text-xs text-gray-400">{{ $shade }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </x-section>

    {{-- Typography --}}
    <x-section id="typography" bg="surface">
        <h2 class="text-2xl font-bold text-white">Typography</h2>
        <p class="mt-2 text-gray-400">Text styles and hierarchy.</p>

        <div class="mt-8 space-y-6">
            <div>
                <p class="text-sm text-gray-400">Hero H1</p>
                <h1 class="text-4xl font-bold text-white md:text-5xl lg:text-6xl">Verify Photo Authenticity</h1>
            </div>
            <div>
                <p class="text-sm text-gray-400">Section H2</p>
                <h2 class="text-3xl font-bold text-white md:text-4xl">Why PixaProof?</h2>
            </div>
            <div>
                <p class="text-sm text-gray-400">Card H3</p>
                <h3 class="text-xl font-semibold text-white md:text-2xl">AI Detection</h3>
            </div>
            <div>
                <p class="text-sm text-gray-400">Label</p>
                <p class="text-sm font-medium uppercase tracking-wider text-brand-500">Enterprise Solutions</p>
            </div>
            <div>
                <p class="text-sm text-gray-400">Body</p>
                <p class="text-base text-gray-300 md:text-lg">Instantly verify if photos are real or AI-generated. Protect yourself from deepfakes and manipulated images.</p>
            </div>
            <div>
                <p class="text-sm text-gray-400">Small/Muted</p>
                <p class="text-sm text-gray-400">Last updated: January 1, 2026</p>
            </div>
        </div>
    </x-section>

    {{-- Buttons --}}
    <x-section id="buttons">
        <h2 class="text-2xl font-bold text-white">Buttons</h2>
        <p class="mt-2 text-gray-400">Button variants and sizes.</p>

        <div class="mt-8 space-y-8">
            {{-- Variants --}}
            <div>
                <h3 class="mb-4 text-lg font-semibold text-white">Variants</h3>
                <div class="flex flex-wrap items-center gap-4">
                    <x-button href="#">Primary</x-button>
                    <x-button href="#" variant="secondary">Secondary</x-button>
                    <x-button href="#" variant="ghost">Ghost</x-button>
                </div>
            </div>

            {{-- White (on brand bg) --}}
            <div class="rounded-xl bg-brand-600 p-8">
                <h3 class="mb-4 text-lg font-semibold text-white">White (on brand background)</h3>
                <x-button href="#" variant="white">White Button</x-button>
            </div>

            {{-- Sizes --}}
            <div>
                <h3 class="mb-4 text-lg font-semibold text-white">Sizes</h3>
                <div class="flex flex-wrap items-center gap-4">
                    <x-button href="#" size="sm">Small</x-button>
                    <x-button href="#">Medium (Default)</x-button>
                    <x-button href="#" size="lg">Large</x-button>
                </div>
            </div>

            {{-- Without Icon --}}
            <div>
                <h3 class="mb-4 text-lg font-semibold text-white">Icon Control</h3>
                <div class="flex flex-wrap items-center gap-4">
                    <x-button href="#">With Icon (Default)</x-button>
                    <x-button href="#" :icon="false">Without Icon</x-button>
                </div>
            </div>
        </div>
    </x-section>

    {{-- Cards --}}
    <x-section id="cards" bg="surface">
        <h2 class="text-2xl font-bold text-white">Cards</h2>
        <p class="mt-2 text-gray-400">Card variants for different content types.</p>

        <div class="mt-8 space-y-12">
            {{-- Base Cards --}}
            <div>
                <h3 class="mb-4 text-lg font-semibold text-white">Base Card</h3>
                <div class="grid gap-4 md:grid-cols-3">
                    <x-card>
                        <p class="text-gray-300">Default card with standard padding.</p>
                    </x-card>
                    <x-card variant="elevated">
                        <p class="text-gray-300">Elevated variant for higher contrast.</p>
                    </x-card>
                    <x-card hover>
                        <p class="text-gray-300">Card with hover effect.</p>
                    </x-card>
                </div>
            </div>

            {{-- Feature Cards --}}
            <div>
                <h3 class="mb-4 text-lg font-semibold text-white">Feature Card</h3>
                <div class="grid gap-6 md:grid-cols-3">
                    <x-card.feature
                        title="AI Detection"
                        description="Advanced algorithms detect AI-generated images with high accuracy."
                    >
                        <x-slot:icon>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                            </svg>
                        </x-slot:icon>
                    </x-card.feature>

                    <x-card.feature
                        title="Instant Results"
                        description="Get verification results in seconds, right from your mobile device."
                    >
                        <x-slot:icon>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                            </svg>
                        </x-slot:icon>
                    </x-card.feature>

                    <x-card.feature
                        title="Privacy First"
                        description="Your images are processed securely and never stored on our servers."
                    >
                        <x-slot:icon>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                        </x-slot:icon>
                    </x-card.feature>
                </div>
            </div>

            {{-- Stat Cards --}}
            <div>
                <h3 class="mb-4 text-lg font-semibold text-white">Stat Card</h3>
                <div class="grid gap-8 md:grid-cols-4">
                    <x-card.stat value="99.9%" label="Accuracy Rate" />
                    <x-card.stat value="<100ms" label="Response Time" description="Average API latency" />
                    <x-card.stat value="$16.6B" label="Fraud Losses" variant="highlight" />
                    <x-card.stat value="244%" label="Increase" description="Digital forgeries in 2024" variant="highlight" />
                </div>
            </div>

            {{-- Process Cards --}}
            <div>
                <h3 class="mb-4 text-lg font-semibold text-white">Process Card</h3>
                <div class="grid gap-6 md:grid-cols-3">
                    <x-card.process step="1" title="Upload Image" description="Select or capture an image from your device." />
                    <x-card.process step="2" title="Analyze" description="AI processes the image for authenticity markers." />
                    <x-card.process step="3" title="Get Results" description="Receive a detailed verification report." />
                </div>
            </div>

            {{-- Problem Cards --}}
            <div>
                <h3 class="mb-4 text-lg font-semibold text-white">Problem Card</h3>
                <div class="grid gap-4 md:grid-cols-2">
                    <x-card.problem
                        title="Deepfake Images"
                        description="AI-generated photos used for identity fraud and social engineering."
                    >
                        <x-slot:icon>
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                            </svg>
                        </x-slot:icon>
                    </x-card.problem>
                    <x-card.problem
                        title="Document Tampering"
                        description="Manipulated IDs and certificates for fraudulent applications."
                    >
                        <x-slot:icon>
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                            </svg>
                        </x-slot:icon>
                    </x-card.problem>
                </div>
            </div>
        </div>
    </x-section>

    {{-- Sections --}}
    <x-section id="sections">
        <h2 class="text-2xl font-bold text-white">Section Backgrounds</h2>
        <p class="mt-2 text-gray-400">Different section background variants.</p>
    </x-section>

    <x-section>
        <div class="rounded-lg border border-surface-700 p-4">
            <p class="text-sm text-gray-400">Default (bg-surface-950)</p>
        </div>
    </x-section>

    <x-section bg="surface">
        <div class="rounded-lg border border-surface-700 p-4">
            <p class="text-sm text-gray-400">Surface (bg-surface-900)</p>
        </div>
    </x-section>

    <x-section bg="gradient">
        <div class="rounded-lg border border-surface-700 p-4">
            <p class="text-sm text-gray-400">Gradient (from-surface-900 to-surface-950)</p>
        </div>
    </x-section>

    <x-section bg="brand">
        <div class="rounded-lg border border-brand-400/30 p-4">
            <p class="text-sm text-brand-100">Brand (bg-brand-600)</p>
        </div>
    </x-section>

    {{-- Patterns --}}
    <x-section id="patterns" py="py-8">
        <h2 class="text-2xl font-bold text-white">Background Patterns</h2>
        <p class="mt-2 text-gray-400">SVG pattern overlays for sections.</p>
    </x-section>

    <x-section pattern="hexagonal" pattern-opacity="0.1" py="py-16">
        <div class="text-center">
            <p class="text-lg font-semibold text-white">Hexagonal Pattern</p>
            <p class="text-sm text-gray-400">For tech/platform sections</p>
        </div>
    </x-section>

    <x-section bg="surface" pattern="circuit" pattern-opacity="0.1" py="py-16">
        <div class="text-center">
            <p class="text-lg font-semibold text-white">Circuit Pattern</p>
            <p class="text-sm text-gray-400">For developer sections</p>
        </div>
    </x-section>

    <x-section pattern="waves" pattern-opacity="0.1" py="py-16">
        <div class="text-center">
            <p class="text-lg font-semibold text-white">Waves Pattern</p>
            <p class="text-sm text-gray-400">For hero sections</p>
        </div>
    </x-section>

    <x-section bg="surface" pattern="grid" pattern-opacity="0.15" py="py-16">
        <div class="text-center">
            <p class="text-lg font-semibold text-white">Grid Pattern</p>
            <p class="text-sm text-gray-400">For general sections</p>
        </div>
    </x-section>

    {{-- Footer spacer --}}
    <x-section py="py-12">
        <div class="text-center">
            <p class="text-sm text-gray-400">End of Component Library</p>
        </div>
    </x-section>
@endsection
