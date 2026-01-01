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
                    <div class="h-0.5 flex-1 bg-gradient-to-r from-brand-500/50 to-brand-500"></div>
                    <svg class="h-4 w-4 -ml-1 text-brand-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
                    </svg>
                </div>
            </div>
            {{-- Line 2: Transmission to Verification --}}
            <div class="flex-1">
                <div class="flex items-center">
                    <div class="h-0.5 flex-1 bg-gradient-to-r from-brand-500/50 to-brand-500"></div>
                    <svg class="h-4 w-4 -ml-1 text-brand-500" fill="currentColor" viewBox="0 0 24 24">
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
            <div class="relative mb-6">
                {{-- Phone with camera --}}
                <div class="relative h-48 w-36 rounded-[1.5rem] border-2 border-surface-600 bg-surface-800 p-2 shadow-xl">
                    {{-- Notch --}}
                    <div class="absolute left-1/2 top-0 h-4 w-14 -translate-x-1/2 rounded-b-xl bg-surface-600"></div>
                    {{-- Screen --}}
                    <div class="flex h-full flex-col overflow-hidden rounded-[1rem] bg-surface-950">
                        {{-- Camera UI --}}
                        <div class="flex flex-1 items-center justify-center p-3">
                            {{-- Viewfinder --}}
                            <div class="relative h-20 w-28 rounded border border-dashed border-green-500/60">
                                {{-- Corner brackets --}}
                                <div class="absolute -left-0.5 -top-0.5 h-3 w-3 border-l-2 border-t-2 border-green-500"></div>
                                <div class="absolute -right-0.5 -top-0.5 h-3 w-3 border-r-2 border-t-2 border-green-500"></div>
                                <div class="absolute -bottom-0.5 -left-0.5 h-3 w-3 border-b-2 border-l-2 border-green-500"></div>
                                <div class="absolute -bottom-0.5 -right-0.5 h-3 w-3 border-b-2 border-r-2 border-green-500"></div>
                                {{-- ID Card placeholder --}}
                                <div class="absolute inset-2 flex items-center justify-center rounded bg-surface-700">
                                    <svg class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        {{-- Capture button --}}
                        <div class="flex items-center justify-center bg-surface-900 py-3">
                            <div class="h-8 w-8 rounded-full border-2 border-white bg-white/20">
                                <div class="m-1 h-5 w-5 rounded-full bg-white"></div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Gallery block indicator --}}
                <div class="absolute -bottom-2 -right-2 flex h-8 w-8 items-center justify-center rounded-full bg-red-500 shadow-lg">
                    <svg class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                    </svg>
                </div>
            </div>
            {{-- Label --}}
            <div class="inline-flex items-center gap-2 rounded-full bg-green-500/10 px-3 py-1 text-sm font-medium text-green-500">
                <span class="flex h-5 w-5 items-center justify-center rounded-full bg-green-500 text-xs text-white">1</span>
                Secure Capture
            </div>
            <p class="mt-3 text-sm text-gray-400">SDK enforces live-only capture</p>
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
                            <path d="M0 96 L72 96 L72 48 L144 48" stroke="currentColor" class="text-brand-500" fill="none" stroke-width="1"/>
                            <path d="M0 120 L50 120 L50 144 L144 144" stroke="currentColor" class="text-brand-500" fill="none" stroke-width="1"/>
                            <path d="M72 0 L72 192" stroke="currentColor" class="text-surface-600" fill="none" stroke-width="1" stroke-dasharray="4 4"/>
                        </svg>
                    </div>
                    {{-- Central encrypted packet --}}
                    <div class="relative">
                        {{-- Outer ring --}}
                        <div class="absolute -inset-4 animate-pulse rounded-full border border-brand-500/30"></div>
                        <div class="absolute -inset-8 rounded-full border border-brand-500/10"></div>
                        {{-- Packet --}}
                        <div class="relative flex h-24 w-24 items-center justify-center rounded-2xl border border-brand-500/50 bg-surface-800">
                            {{-- Lock icon --}}
                            <svg class="h-10 w-10 text-brand-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                            {{-- PIEA badge --}}
                            <div class="absolute -bottom-1 -right-1 rounded bg-brand-500 px-1.5 py-0.5 text-[8px] font-bold text-white">
                                PIEA
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Label --}}
            <div class="inline-flex items-center gap-2 rounded-full bg-brand-500/10 px-3 py-1 text-sm font-medium text-brand-500">
                <span class="flex h-5 w-5 items-center justify-center rounded-full bg-brand-500 text-xs text-white">2</span>
                Reliable Transmission
            </div>
            <p class="mt-3 text-sm text-gray-400">E2E encrypted with PIEA signature</p>
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
                    <div class="relative z-10 flex h-24 w-32 items-center justify-center rounded-3xl bg-surface-800 shadow-lg">
                        {{-- Inner content --}}
                        <div class="flex flex-col items-center">
                            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-green-500/20">
                                <svg class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            </div>
                            <p class="mt-1 text-xs font-medium text-green-500">VERIFIED</p>
                        </div>
                        {{-- Speed indicator --}}
                        <div class="absolute -right-2 top-2 rounded-full bg-surface-700 px-2 py-1 text-[10px] font-medium text-gray-300">
                            &lt;500ms
                        </div>
                    </div>
                    {{-- Detection badges --}}
                    <div class="absolute -bottom-2 left-1/2 flex -translate-x-1/2 gap-1">
                        <div class="rounded-full bg-surface-700 px-2 py-0.5 text-[8px] text-gray-400">35+ Tests</div>
                        <div class="rounded-full bg-surface-700 px-2 py-0.5 text-[8px] text-gray-400">AI Scan</div>
                    </div>
                </div>
            </div>
            {{-- Label --}}
            <div class="inline-flex items-center gap-2 rounded-full bg-green-500/10 px-3 py-1 text-sm font-medium text-green-500">
                <span class="flex h-5 w-5 items-center justify-center rounded-full bg-green-500 text-xs text-white">3</span>
                Instant Verification
            </div>
            <p class="mt-3 text-sm text-gray-400">35+ tamper tests in real-time</p>
        </div>
    </div>
</div>
