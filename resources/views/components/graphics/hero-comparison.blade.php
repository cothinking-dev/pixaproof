{{--
Hero Comparison Graphic
Shows three-panel comparison: Live Capture (Protected) vs Gallery Upload (Blocked) vs AI Generated (Detected)
--}}

<div class="relative">
    {{-- Background glow --}}
    <div class="absolute inset-0 -z-10">
        <div class="absolute left-1/4 top-1/2 h-64 w-64 -translate-x-1/2 -translate-y-1/2 rounded-full bg-green-500/10 blur-3xl"></div>
        <div class="absolute left-1/2 top-1/2 h-64 w-64 -translate-x-1/2 -translate-y-1/2 rounded-full bg-brand-500/10 blur-3xl"></div>
        <div class="absolute left-3/4 top-1/2 h-64 w-64 -translate-x-1/2 -translate-y-1/2 rounded-full bg-yellow-500/10 blur-3xl"></div>
    </div>

    <div class="grid gap-6 md:grid-cols-3">
        {{-- Live Capture - Protected --}}
        <div class="group relative">
            <div class="absolute -inset-1 rounded-2xl bg-gradient-to-b from-green-500/20 to-transparent opacity-0 transition group-hover:opacity-100"></div>
            <div class="relative overflow-hidden rounded-xl border border-surface-700 bg-surface-800 p-4">
                {{-- Status Badge --}}
                <div class="absolute right-3 top-3 z-10 flex items-center gap-1 rounded-full bg-green-500/20 px-2 py-1">
                    <svg class="h-3 w-3 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="text-xs font-medium text-green-500">Protected</span>
                </div>

                {{-- Mini phone mockup --}}
                <div class="mx-auto w-32">
                    <div class="rounded-2xl border-2 border-surface-600 bg-surface-900 p-1">
                        <div class="aspect-[9/16] overflow-hidden rounded-xl bg-surface-950">
                            {{-- Camera UI --}}
                            <div class="flex h-full flex-col">
                                <div class="flex-1 flex items-center justify-center p-2">
                                    <div class="relative h-16 w-24 rounded border border-dashed border-green-500/50">
                                        <div class="absolute -left-0.5 -top-0.5 h-2 w-2 border-l border-t border-green-500"></div>
                                        <div class="absolute -right-0.5 -top-0.5 h-2 w-2 border-r border-t border-green-500"></div>
                                        <div class="absolute -bottom-0.5 -left-0.5 h-2 w-2 border-b border-l border-green-500"></div>
                                        <div class="absolute -bottom-0.5 -right-0.5 h-2 w-2 border-b border-r border-green-500"></div>
                                        {{-- ID card placeholder --}}
                                        <div class="absolute inset-2 rounded bg-surface-700">
                                            <div class="absolute left-1 top-1 h-2 w-4 rounded-sm bg-surface-600"></div>
                                            <div class="absolute bottom-1 left-1 right-1 space-y-0.5">
                                                <div class="h-0.5 w-3/4 rounded bg-surface-600"></div>
                                                <div class="h-0.5 w-1/2 rounded bg-surface-600"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-center bg-surface-900 py-2">
                                    <div class="h-4 w-4 rounded-full border-2 border-white bg-white/20"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 text-center">
                    <h4 class="font-semibold text-white">Live Capture</h4>
                    <p class="mt-1 text-xs text-gray-400">Real-time camera verification</p>
                </div>
            </div>
        </div>

        {{-- Gallery Upload - Blocked --}}
        <div class="group relative">
            <div class="absolute -inset-1 rounded-2xl bg-gradient-to-b from-red-500/20 to-transparent opacity-0 transition group-hover:opacity-100"></div>
            <div class="relative overflow-hidden rounded-xl border border-surface-700 bg-surface-800 p-4">
                {{-- Status Badge --}}
                <div class="absolute right-3 top-3 z-10 flex items-center gap-1 rounded-full bg-red-500/20 px-2 py-1">
                    <svg class="h-3 w-3 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/>
                    </svg>
                    <span class="text-xs font-medium text-red-500">Blocked</span>
                </div>

                {{-- Mini phone mockup with gallery --}}
                <div class="mx-auto w-32">
                    <div class="rounded-2xl border-2 border-surface-600 bg-surface-900 p-1">
                        <div class="aspect-[9/16] overflow-hidden rounded-xl bg-surface-950">
                            {{-- Gallery grid --}}
                            <div class="flex h-full flex-col p-2">
                                <div class="mb-2 text-center text-[8px] text-gray-500">Gallery</div>
                                <div class="grid flex-1 grid-cols-3 gap-1">
                                    @for($i = 0; $i < 9; $i++)
                                        <div class="rounded bg-surface-700"></div>
                                    @endfor
                                </div>
                                {{-- Block overlay --}}
                                <div class="absolute inset-0 flex items-center justify-center bg-red-950/80">
                                    <div class="text-center">
                                        <svg class="mx-auto h-8 w-8 text-red-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                                        </svg>
                                        <p class="mt-1 text-[8px] font-medium text-red-400">BLOCKED</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 text-center">
                    <h4 class="font-semibold text-white">Gallery Upload</h4>
                    <p class="mt-1 text-xs text-gray-400">Pre-staged photos rejected</p>
                </div>
            </div>
        </div>

        {{-- AI Generated - Detected --}}
        <div class="group relative">
            <div class="absolute -inset-1 rounded-2xl bg-gradient-to-b from-yellow-500/20 to-transparent opacity-0 transition group-hover:opacity-100"></div>
            <div class="relative overflow-hidden rounded-xl border border-surface-700 bg-surface-800 p-4">
                {{-- Status Badge --}}
                <div class="absolute right-3 top-3 z-10 flex items-center gap-1 rounded-full bg-yellow-500/20 px-2 py-1">
                    <svg class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/>
                    </svg>
                    <span class="text-xs font-medium text-yellow-500">Detected</span>
                </div>

                {{-- Mini mockup with AI image --}}
                <div class="mx-auto w-32">
                    <div class="rounded-2xl border-2 border-surface-600 bg-surface-900 p-1">
                        <div class="aspect-[9/16] overflow-hidden rounded-xl bg-surface-950">
                            {{-- Fake ID with AI warning --}}
                            <div class="flex h-full flex-col items-center justify-center p-2">
                                {{-- Synthetic ID card --}}
                                <div class="relative w-full rounded bg-surface-700 p-2">
                                    {{-- Photo area with glitch effect --}}
                                    <div class="relative mb-2 aspect-square w-8 overflow-hidden rounded bg-surface-600">
                                        <div class="absolute inset-0 bg-gradient-to-br from-purple-500/20 to-cyan-500/20"></div>
                                        {{-- Glitch lines --}}
                                        <div class="absolute inset-x-0 top-1/3 h-0.5 bg-cyan-500/50"></div>
                                        <div class="absolute inset-x-0 top-2/3 h-0.5 bg-purple-500/50"></div>
                                    </div>
                                    <div class="space-y-1">
                                        <div class="h-1 w-3/4 rounded bg-surface-600"></div>
                                        <div class="h-1 w-1/2 rounded bg-surface-600"></div>
                                    </div>

                                    {{-- AI detection overlay --}}
                                    <div class="absolute inset-0 flex items-center justify-center rounded bg-yellow-950/90">
                                        <div class="text-center">
                                            <svg class="mx-auto h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z" />
                                            </svg>
                                            <p class="mt-0.5 text-[6px] font-bold text-yellow-500">AI DETECTED</p>
                                        </div>
                                    </div>
                                </div>

                                <p class="mt-2 text-[8px] text-gray-400">Synthetic content flagged</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 text-center">
                    <h4 class="font-semibold text-white">AI Generated</h4>
                    <p class="mt-1 text-xs text-gray-400">Deepfakes identified</p>
                </div>
            </div>
        </div>
    </div>
</div>
