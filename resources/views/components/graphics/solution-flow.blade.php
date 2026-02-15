{{--
Solution Flow Graphic
Shows the three-pillar flow: Secure Capture → Reliable Transmission → Instant Verification
--}}

<div class="relative">
    {{-- Connection Lines (desktop only) --}}
    <div class="absolute left-0 right-0 top-1/2 hidden -translate-y-1/2 md:block">
        <div class="mx-auto flex max-w-4xl items-center justify-between px-20">
            {{-- Line 1: Capture to Transmission --}}
            <div class="flex-1">
                <div class="flex items-center">
                    <div class="h-0.5 flex-1 bg-gradient-to-r from-primary-500/50 to-primary-500"></div>
                    <svg class="h-4 w-4 -ml-1 text-primary-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
                    </svg>
                </div>
            </div>
            {{-- Line 2: Transmission to Verification --}}
            <div class="flex-1">
                <div class="flex items-center">
                    <div class="h-0.5 flex-1 bg-gradient-to-r from-primary-500/50 to-primary-500"></div>
                    <svg class="h-4 w-4 -ml-1 text-primary-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <div class="relative grid gap-8 md:grid-cols-3">
        {{-- Step 1: Secure Capture --}}
        <div class="flex flex-col items-center text-center">
            {{-- Visual --}}
            <div class="relative mb-6 flex justify-center">
                <x-graphics.phone-mockup size="md" image="images/mockups/solution-flow-capture.webp" imageAlt="Document capture with phone" variant="default" />
                {{-- Gallery block indicator --}}
                <div class="absolute -bottom-2 -right-2 z-10 flex h-8 w-8 items-center justify-center rounded-full bg-red-500 shadow-lg">
                    <svg class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                    </svg>
                </div>
            </div>
            {{-- Label --}}
            <div class="inline-flex items-center gap-2 rounded-full bg-green-500/10 px-3 py-1 text-sm font-medium text-green-600">
                <span class="flex h-5 w-5 items-center justify-center rounded-full bg-green-500 text-xs text-white">1</span>
                Secure Capture
            </div>
            <p class="mt-3 text-sm text-neutral-600">Web SDK enforces live-only capture. Gallery uploads, virtual cameras, and emulators are blocked at the source.</p>
        </div>

        {{-- Step 2: Reliable Transmission --}}
        <div class="flex flex-col items-center text-center">
            {{-- Visual --}}
            <div class="relative mb-6">
                {{-- Encrypted data packet animation --}}
                <div class="relative h-48 w-36 flex items-center justify-center">
                    {{-- Background circuit lines --}}
                    <div class="absolute inset-0 opacity-20">
                        <svg class="h-full w-full" viewBox="0 0 144 192">
                            <path d="M0 96 L72 96 L72 48 L144 48" stroke="currentColor" class="text-primary-600" fill="none" stroke-width="1"/>
                            <path d="M0 120 L50 120 L50 144 L144 144" stroke="currentColor" class="text-primary-600" fill="none" stroke-width="1"/>
                            <path d="M72 0 L72 192" stroke="currentColor" class="text-neutral-400" fill="none" stroke-width="1" stroke-dasharray="4 4"/>
                        </svg>
                    </div>
                    {{-- Central encrypted packet --}}
                    <div class="relative">
                        {{-- Outer ring --}}
                        <div class="absolute -inset-4 animate-pulse rounded-full border border-primary-500/30"></div>
                        <div class="absolute -inset-8 rounded-full border border-primary-500/10"></div>
                        {{-- Packet --}}
                        <div class="relative flex h-24 w-24 items-center justify-center rounded-2xl border border-primary-500/50 bg-white">
                            {{-- Lock icon --}}
                            <svg class="h-10 w-10 text-primary-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                            {{-- PIEA badge --}}
                            <div class="absolute -bottom-1 -right-1 rounded bg-primary-500 px-1.5 py-0.5 text-[8px] font-bold text-white">
                                PIEA
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Label --}}
            <div class="inline-flex items-center gap-2 rounded-full bg-primary-500/10 px-3 py-1 text-sm font-medium text-primary-600">
                <span class="flex h-5 w-5 items-center justify-center rounded-full bg-primary-500 text-xs text-white">2</span>
                Reliable Transmission
            </div>
            <p class="mt-3 text-sm text-neutral-600">E2E encrypted with PIEA signature</p>
        </div>

        {{-- Step 3: Instant Verification --}}
        <div class="flex flex-col items-center text-center">
            {{-- Visual --}}
            <div class="relative mb-6">
                {{-- Cloud with check --}}
                <div class="relative h-48 w-36 flex items-center justify-center">
                    {{-- Verification rays --}}
                    <div class="absolute inset-0 flex items-center justify-center">
                        @for($i = 0; $i < 8; $i++)
                            <div class="absolute h-2 w-16 origin-left bg-gradient-to-r from-green-500/30 to-transparent"
                                 style="transform: rotate({{ $i * 45 }}deg);"></div>
                        @endfor
                    </div>
                    {{-- Cloud shape --}}
                    <div class="relative z-10 flex h-24 w-32 items-center justify-center rounded-3xl bg-white shadow-lg">
                        {{-- Inner content --}}
                        <div class="flex flex-col items-center">
                            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-green-500/20">
                                <svg class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            </div>
                            <p class="mt-1 text-xs font-medium text-green-600">VERIFIED</p>
                        </div>
                        {{-- Speed indicator --}}
                        <div class="absolute -right-2 top-2 rounded-full bg-neutral-100 px-2 py-1 text-[10px] font-medium text-neutral-700">
                            &lt;500ms
                        </div>
                    </div>
                    {{-- Detection badges --}}
                    <div class="absolute -bottom-2 left-1/2 flex -translate-x-1/2 gap-1">
                        <div class="rounded-full bg-neutral-100 px-2 py-0.5 text-[8px] text-neutral-700">35+ Tests</div>
                        <div class="rounded-full bg-neutral-100 px-2 py-0.5 text-[8px] text-neutral-700">AI Scan</div>
                    </div>
                </div>
            </div>
            {{-- Label --}}
            <div class="inline-flex items-center gap-2 rounded-full bg-green-500/10 px-3 py-1 text-sm font-medium text-green-600">
                <span class="flex h-5 w-5 items-center justify-center rounded-full bg-green-500 text-xs text-white">3</span>
                Instant Verification
            </div>
            <p class="mt-3 text-sm text-neutral-600">35+ tamper tests in real-time</p>
        </div>
    </div>
</div>
