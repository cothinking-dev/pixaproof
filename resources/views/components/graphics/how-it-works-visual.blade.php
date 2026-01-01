{{--
How It Works Visual
Shows three steps with device mockups: Integrate → Capture → Verify
--}}

<div class="grid gap-8 lg:grid-cols-3">
    {{-- Step 1: Integrate SDK --}}
    <div class="group relative">
        {{-- Step connector (desktop) --}}
        <div class="absolute -right-4 top-1/2 z-20 hidden h-8 w-8 -translate-y-1/2 items-center justify-center lg:flex">
            <svg class="h-6 w-6 text-brand-500" fill="currentColor" viewBox="0 0 24 24">
                <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
            </svg>
        </div>

        <div class="relative overflow-hidden rounded-2xl border border-surface-700 bg-surface-800 p-6 transition group-hover:border-surface-600">
            {{-- Step number --}}
            <div class="absolute -right-6 -top-6 flex h-20 w-20 items-center justify-end pb-4 pr-4 text-6xl font-bold text-surface-700">
                1
            </div>

            {{-- Visual: Code snippet mockup --}}
            <div class="relative mb-6 overflow-hidden rounded-lg bg-surface-950 p-4">
                {{-- Code header --}}
                <div class="mb-3 flex items-center gap-2">
                    <div class="h-3 w-3 rounded-full bg-red-500/60"></div>
                    <div class="h-3 w-3 rounded-full bg-yellow-500/60"></div>
                    <div class="h-3 w-3 rounded-full bg-green-500/60"></div>
                    <span class="ml-2 text-xs text-gray-500">app.swift</span>
                </div>
                {{-- Code lines --}}
                <div class="space-y-2 font-mono text-xs">
                    <div><span class="text-purple-400">import</span> <span class="text-green-400">PixaProof</span></div>
                    <div class="text-gray-500">// Initialize SDK</div>
                    <div>
                        <span class="text-blue-400">let</span>
                        <span class="text-white">pixaproof</span>
                        <span class="text-gray-400">=</span>
                        <span class="text-yellow-400">PixaProof</span><span class="text-gray-400">(</span>
                    </div>
                    <div class="pl-4">
                        <span class="text-gray-400">apiKey:</span>
                        <span class="text-green-400">"pk_live_..."</span>
                    </div>
                    <div><span class="text-gray-400">)</span></div>
                </div>
                {{-- Integration time badge --}}
                <div class="mt-4 inline-flex items-center gap-1 rounded-full bg-brand-500/10 px-2 py-1 text-xs text-brand-400">
                    <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    2-4 hours
                </div>
            </div>

            {{-- Content --}}
            <h3 class="text-xl font-semibold text-white">Integrate Our SDK</h3>
            <p class="mt-2 text-gray-400">
                Add PixaProof SDK to your iOS or Android app. Comprehensive documentation and sample code included.
            </p>

            {{-- Platform badges --}}
            <div class="mt-4 flex gap-2">
                <div class="flex items-center gap-1 rounded bg-surface-700 px-2 py-1 text-xs text-gray-300">
                    <svg class="h-3 w-3" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M17.05 20.28c-.98.95-2.05.8-3.08.35-1.09-.46-2.09-.48-3.24 0-1.44.62-2.2.44-3.06-.35C2.79 15.25 3.51 7.59 9.05 7.31c1.35.07 2.29.74 3.08.8 1.18-.24 2.31-.93 3.57-.84 1.51.12 2.65.72 3.4 1.8-3.12 1.87-2.38 5.98.48 7.13-.57 1.5-1.31 2.99-2.54 4.09l.01-.01zM12.03 7.25c-.15-2.23 1.66-4.07 3.74-4.25.29 2.58-2.34 4.5-3.74 4.25z"/>
                    </svg>
                    iOS
                </div>
                <div class="flex items-center gap-1 rounded bg-surface-700 px-2 py-1 text-xs text-gray-300">
                    <svg class="h-3 w-3" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M17.523 15.341c-.563-.203-.934-.653-.934-1.241 0-.594.388-1.075.988-1.275.488-.166.869-.59.869-1.125 0-.622-.447-1.134-.989-1.275-.575-.15-.988-.628-.988-1.219s.413-1.069.988-1.219c.542-.141.989-.653.989-1.275 0-.535-.381-.959-.869-1.125-.6-.2-.988-.681-.988-1.275 0-.588.371-1.038.934-1.241.675-.244 1.166-.797 1.166-1.453 0-.916-.794-1.659-1.775-1.659-.566 0-1.072.256-1.406.656-.281.338-.516.75-.516 1.203 0 .375.175.706.447.919-.272.213-.447.544-.447.919 0 .453.235.865.516 1.203.334.4.84.656 1.406.656.981 0 1.775.743 1.775 1.659 0 .656-.491 1.209-1.166 1.453zm-11.046 0c.563-.203.934-.653.934-1.241 0-.594-.388-1.075-.988-1.275-.488-.166-.869-.59-.869-1.125 0-.622.447-1.134.989-1.275.575-.15.988-.628.988-1.219s-.413-1.069-.988-1.219c-.542-.141-.989-.653-.989-1.275 0-.535.381-.959.869-1.125.6-.2.988-.681.988-1.275 0-.588-.371-1.038-.934-1.241C5.802 1.072 5.311.519 5.311-.137c0-.916.794-1.659 1.775-1.659.566 0 1.072.256 1.406.656.281.338.516.75.516 1.203 0 .375-.175.706-.447.919.272.213.447.544.447.919 0 .453-.235.865-.516 1.203-.334.4-.84.656-1.406.656-.981 0-1.775.743-1.775 1.659 0 .656.491 1.209 1.166 1.453z"/>
                    </svg>
                    Android
                </div>
                <div class="flex items-center gap-1 rounded bg-surface-700 px-2 py-1 text-xs text-gray-300">
                    <svg class="h-3 w-3" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                    </svg>
                    Flutter
                </div>
            </div>
        </div>
    </div>

    {{-- Step 2: Capture & Transmit --}}
    <div class="group relative">
        {{-- Step connector (desktop) --}}
        <div class="absolute -right-4 top-1/2 z-20 hidden h-8 w-8 -translate-y-1/2 items-center justify-center lg:flex">
            <svg class="h-6 w-6 text-brand-500" fill="currentColor" viewBox="0 0 24 24">
                <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
            </svg>
        </div>

        <div class="relative overflow-hidden rounded-2xl border border-surface-700 bg-surface-800 p-6 transition group-hover:border-surface-600">
            {{-- Step number --}}
            <div class="absolute -right-6 -top-6 flex h-20 w-20 items-center justify-end pb-4 pr-4 text-6xl font-bold text-surface-700">
                2
            </div>

            {{-- Visual: Phone with capture UI --}}
            <div class="relative mb-6 flex justify-center">
                <div class="relative w-32">
                    {{-- Phone frame --}}
                    <div class="rounded-[1.5rem] border-2 border-surface-600 bg-surface-900 p-1.5">
                        <div class="aspect-[9/16] overflow-hidden rounded-[1.2rem] bg-surface-950">
                            {{-- Camera UI --}}
                            <div class="flex h-full flex-col">
                                {{-- Status bar --}}
                                <div class="flex items-center justify-between bg-surface-900 px-3 py-1 text-[8px] text-gray-500">
                                    <span>9:41</span>
                                    <div class="flex gap-1">
                                        <div class="h-1.5 w-1.5 rounded-full bg-gray-500"></div>
                                        <div class="h-1.5 w-1.5 rounded-full bg-gray-500"></div>
                                        <div class="h-1.5 w-1.5 rounded-full bg-gray-500"></div>
                                    </div>
                                </div>
                                {{-- Viewfinder --}}
                                <div class="flex flex-1 items-center justify-center p-2">
                                    <div class="relative h-16 w-24 rounded border border-dashed border-green-500/50">
                                        {{-- Corner brackets --}}
                                        <div class="absolute -left-0.5 -top-0.5 h-2 w-2 border-l border-t border-green-500"></div>
                                        <div class="absolute -right-0.5 -top-0.5 h-2 w-2 border-r border-t border-green-500"></div>
                                        <div class="absolute -bottom-0.5 -left-0.5 h-2 w-2 border-b border-l border-green-500"></div>
                                        <div class="absolute -bottom-0.5 -right-0.5 h-2 w-2 border-b border-r border-green-500"></div>
                                        {{-- Scanning animation --}}
                                        <div class="absolute inset-x-0 top-1/2 h-0.5 animate-pulse bg-green-500/50"></div>
                                    </div>
                                </div>
                                {{-- PIEA indicator --}}
                                <div class="bg-surface-900 px-2 py-1 text-center">
                                    <div class="inline-flex items-center gap-1 rounded-full bg-brand-500/20 px-2 py-0.5 text-[7px] text-brand-400">
                                        <svg class="h-2 w-2" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                        </svg>
                                        PIEA Active
                                    </div>
                                </div>
                                {{-- Capture button --}}
                                <div class="flex items-center justify-center bg-surface-900 py-2">
                                    <div class="h-6 w-6 rounded-full border-2 border-white bg-white/20">
                                        <div class="m-0.5 h-4 w-4 rounded-full bg-white"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Encryption indicator --}}
                    <div class="absolute -right-4 top-1/2 -translate-y-1/2">
                        <div class="flex items-center gap-1 rounded-full bg-green-500/20 px-2 py-1 text-[8px] text-green-400">
                            <svg class="h-2 w-2" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            E2E
                        </div>
                    </div>
                </div>
            </div>

            {{-- Content --}}
            <h3 class="text-xl font-semibold text-white">Capture & Transmit</h3>
            <p class="mt-2 text-gray-400">
                PIEA embeds cryptographic signature at capture. End-to-end encryption ensures secure transmission.
            </p>

            {{-- Feature badges --}}
            <div class="mt-4 flex flex-wrap gap-2">
                <div class="rounded-full bg-green-500/10 px-2 py-1 text-xs text-green-400">Live-only capture</div>
                <div class="rounded-full bg-brand-500/10 px-2 py-1 text-xs text-brand-400">PIEA signature</div>
            </div>
        </div>
    </div>

    {{-- Step 3: Verify Instantly --}}
    <div class="group relative">
        <div class="relative overflow-hidden rounded-2xl border border-surface-700 bg-surface-800 p-6 transition group-hover:border-surface-600">
            {{-- Step number --}}
            <div class="absolute -right-6 -top-6 flex h-20 w-20 items-center justify-end pb-4 pr-4 text-6xl font-bold text-surface-700">
                3
            </div>

            {{-- Visual: Verification dashboard --}}
            <div class="relative mb-6 overflow-hidden rounded-lg bg-surface-950 p-4">
                {{-- Header --}}
                <div class="mb-3 flex items-center justify-between">
                    <span class="text-xs font-medium text-white">Verification Result</span>
                    <span class="rounded-full bg-green-500/20 px-2 py-0.5 text-[10px] font-medium text-green-400">&lt;500ms</span>
                </div>
                {{-- Result card --}}
                <div class="rounded-lg border border-green-500/30 bg-green-500/10 p-3">
                    <div class="flex items-center gap-2">
                        <div class="flex h-8 w-8 items-center justify-center rounded-full bg-green-500/20">
                            <svg class="h-4 w-4 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-green-400">AUTHENTIC</p>
                            <p class="text-[10px] text-gray-400">All 35 tests passed</p>
                        </div>
                    </div>
                </div>
                {{-- Test categories --}}
                <div class="mt-3 grid grid-cols-3 gap-2">
                    <div class="rounded bg-surface-800 p-2 text-center">
                        <div class="text-xs font-medium text-green-400">PIEA</div>
                        <div class="text-[8px] text-gray-500">Valid</div>
                    </div>
                    <div class="rounded bg-surface-800 p-2 text-center">
                        <div class="text-xs font-medium text-green-400">AI Scan</div>
                        <div class="text-[8px] text-gray-500">Clear</div>
                    </div>
                    <div class="rounded bg-surface-800 p-2 text-center">
                        <div class="text-xs font-medium text-green-400">Tamper</div>
                        <div class="text-[8px] text-gray-500">None</div>
                    </div>
                </div>
            </div>

            {{-- Content --}}
            <h3 class="text-xl font-semibold text-white">Verify Instantly</h3>
            <p class="mt-2 text-gray-400">
                35+ tamper detection tests, AI manipulation scan, all completed in under 500ms.
            </p>

            {{-- API response badge --}}
            <div class="mt-4">
                <div class="inline-flex items-center gap-2 rounded-lg bg-surface-700 px-3 py-2 text-xs">
                    <span class="text-gray-400">Response:</span>
                    <code class="text-green-400">{"authentic": true}</code>
                </div>
            </div>
        </div>
    </div>
</div>
