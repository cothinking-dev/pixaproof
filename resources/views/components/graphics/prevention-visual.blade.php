{{--
Prevention Visual Component
Shows side-by-side comparison of Traditional vs PixaProof approach with phone mockups
--}}

<div class="relative">
    {{-- Background glow effects --}}
    <div class="absolute left-1/4 top-1/2 h-64 w-64 -translate-x-1/2 -translate-y-1/2 rounded-full bg-red-500/10 blur-3xl"></div>
    <div class="absolute right-1/4 top-1/2 h-64 w-64 -translate-x-1/2 -translate-y-1/2 rounded-full bg-green-500/10 blur-3xl"></div>

    <div class="grid gap-8 md:grid-cols-2">
        {{-- Traditional Approach --}}
        <div class="relative">
            <div class="mb-4 flex items-center justify-center gap-2">
                <div class="h-3 w-3 rounded-full bg-red-500"></div>
                <span class="text-sm font-medium text-red-400">Traditional Verification</span>
            </div>

            {{-- Phone showing fraud succeeding --}}
            <div class="flex justify-center">
                <div class="relative">
                    <x-graphics.phone-mockup scale="0.45">
                        <div class="flex h-full flex-col bg-surface-950">
                            {{-- Status bar --}}
                            <div class="flex h-12 items-center justify-between bg-surface-900 px-6 pt-4 text-sm text-gray-400">
                                <span>9:41</span>
                                <span class="text-xs">Gallery</span>
                            </div>

                            {{-- Gallery grid showing pre-staged photos --}}
                            <div class="flex-1 p-4">
                                <p class="mb-3 text-xs text-gray-500">Select Photo</p>
                                <div class="grid grid-cols-3 gap-2">
                                    @for($i = 0; $i < 6; $i++)
                                        <div class="aspect-square rounded-lg bg-surface-800 {{ $i === 2 ? 'ring-2 ring-brand-500' : '' }}">
                                            @if($i === 2)
                                                {{-- Selected fake ID --}}
                                                <div class="flex h-full items-center justify-center">
                                                    <svg class="h-8 w-8 text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                                                    </svg>
                                                </div>
                                            @endif
                                        </div>
                                    @endfor
                                </div>

                                {{-- Warning badge --}}
                                <div class="mt-4 rounded-lg border border-yellow-500/30 bg-yellow-500/10 p-3">
                                    <div class="flex items-center gap-2">
                                        <svg class="h-5 w-5 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                        </svg>
                                        <span class="text-xs text-yellow-400">Pre-edited photo selected</span>
                                    </div>
                                </div>
                            </div>

                            {{-- Upload button --}}
                            <div class="bg-surface-900 p-4">
                                <button class="w-full rounded-lg bg-brand-500 py-3 text-sm font-medium text-white">
                                    Upload Photo
                                </button>
                            </div>
                        </div>
                    </x-graphics.phone-mockup>

                    {{-- Result indicator --}}
                    <div class="absolute -bottom-4 left-1/2 -translate-x-1/2">
                        <div class="flex items-center gap-2 rounded-full bg-red-500/20 px-4 py-2 text-sm text-red-400">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                            </svg>
                            <span>Fraud succeeds</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Issues list --}}
            <div class="mt-8 space-y-2 rounded-xl border border-red-500/20 bg-red-500/5 p-4">
                <div class="flex items-center gap-2 text-sm text-gray-400">
                    <svg class="h-4 w-4 shrink-0 text-red-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span>Gallery uploads accepted</span>
                </div>
                <div class="flex items-center gap-2 text-sm text-gray-400">
                    <svg class="h-4 w-4 shrink-0 text-red-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span>No capture verification</span>
                </div>
                <div class="flex items-center gap-2 text-sm text-gray-400">
                    <svg class="h-4 w-4 shrink-0 text-red-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span>Post-submission analysis only</span>
                </div>
            </div>
        </div>

        {{-- PixaProof Approach --}}
        <div class="relative">
            <div class="mb-4 flex items-center justify-center gap-2">
                <div class="h-3 w-3 rounded-full bg-green-500"></div>
                <span class="text-sm font-medium text-green-400">PixaProof Protection</span>
            </div>

            {{-- Phone showing fraud blocked --}}
            <div class="flex justify-center">
                <div class="relative">
                    <x-graphics.phone-mockup scale="0.45">
                        <div class="flex h-full flex-col bg-surface-950">
                            {{-- Status bar --}}
                            <div class="flex h-12 items-center justify-between bg-surface-900 px-6 pt-4 text-sm text-gray-400">
                                <span>9:41</span>
                                <div class="flex items-center gap-1">
                                    <svg class="h-4 w-4 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                                    </svg>
                                    <span class="text-xs text-green-400">Secured</span>
                                </div>
                            </div>

                            {{-- Blocked overlay --}}
                            <div class="flex flex-1 flex-col items-center justify-center p-6">
                                <div class="mb-4 flex h-24 w-24 items-center justify-center rounded-full bg-red-500/20">
                                    <svg class="h-12 w-12 text-red-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                                    </svg>
                                </div>
                                <p class="text-center text-lg font-semibold text-white">Gallery Blocked</p>
                                <p class="mt-2 text-center text-sm text-gray-400">Only live camera capture allowed</p>

                                {{-- Action button --}}
                                <button class="mt-6 rounded-lg bg-green-500 px-6 py-3 text-sm font-medium text-white">
                                    Use Camera Instead
                                </button>
                            </div>

                            {{-- SDK badge --}}
                            <div class="bg-surface-900 p-4">
                                <div class="flex items-center justify-center gap-2 text-xs text-gray-400">
                                    <svg class="h-4 w-4 text-brand-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                                    </svg>
                                    <span>Protected by PixaProof SDK</span>
                                </div>
                            </div>
                        </div>
                    </x-graphics.phone-mockup>

                    {{-- Result indicator --}}
                    <div class="absolute -bottom-4 left-1/2 -translate-x-1/2">
                        <div class="flex items-center gap-2 rounded-full bg-green-500/20 px-4 py-2 text-sm text-green-400">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Fraud prevented</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Benefits list --}}
            <div class="mt-8 space-y-2 rounded-xl border border-green-500/20 bg-green-500/5 p-4">
                <div class="flex items-center gap-2 text-sm text-gray-400">
                    <svg class="h-4 w-4 shrink-0 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                    <span>Gallery uploads blocked</span>
                </div>
                <div class="flex items-center gap-2 text-sm text-gray-400">
                    <svg class="h-4 w-4 shrink-0 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                    <span>PIEA signature embedded</span>
                </div>
                <div class="flex items-center gap-2 text-sm text-gray-400">
                    <svg class="h-4 w-4 shrink-0 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                    <span>At-capture security</span>
                </div>
            </div>
        </div>
    </div>
</div>
