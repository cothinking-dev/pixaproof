{{--
Stats Showcase Component
Enhanced visual display for statistics with animated elements
--}}

<div class="relative">
    {{-- Background decorative elements --}}
    <div class="absolute inset-0 -z-10">
        {{-- Left glow --}}
        <div class="absolute left-1/4 top-1/2 h-48 w-48 -translate-x-1/2 -translate-y-1/2 rounded-full bg-primary-500/5 blur-3xl"></div>
        {{-- Center glow --}}
        <div class="absolute left-1/2 top-1/2 h-64 w-64 -translate-x-1/2 -translate-y-1/2 rounded-full bg-primary-500/10 blur-3xl"></div>
        {{-- Right glow --}}
        <div class="absolute left-3/4 top-1/2 h-48 w-48 -translate-x-1/2 -translate-y-1/2 rounded-full bg-primary-500/5 blur-3xl"></div>
    </div>

    <div class="grid gap-8 md:grid-cols-3">
        {{-- Stat 1: Enterprise Clients --}}
        <div class="group relative">
            <div class="relative overflow-hidden rounded-2xl border border-neutral-200 bg-white/50 p-8 backdrop-blur transition hover:border-primary-500/30">
                {{-- Decorative corner --}}
                <div class="absolute right-0 top-0 h-20 w-20 translate-x-1/2 -translate-y-1/2 rounded-full bg-primary-500/10"></div>

                {{-- Icon --}}
                <div class="mb-4 flex h-14 w-14 items-center justify-center rounded-xl bg-primary-500/10">
                    <svg class="h-7 w-7 text-primary-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                    </svg>
                </div>

                {{-- Value --}}
                <div class="mb-2 flex items-baseline gap-1">
                    <span class="text-5xl font-bold text-neutral-900">500</span>
                    <span class="text-3xl font-bold text-primary-600">+</span>
                </div>

                {{-- Label --}}
                <p class="text-lg font-medium text-neutral-900">Enterprise Clients</p>
                <p class="mt-1 text-sm text-neutral-500">Across ASEAN via EMAS eKYC</p>

                {{-- Visual: Mini bar chart --}}
                <div class="mt-6 flex items-end gap-1">
                    @for($i = 0; $i < 7; $i++)
                        <div class="w-4 rounded-t bg-primary-500/30 transition-all group-hover:bg-primary-500/50"
                             style="height: {{ 12 + ($i * 4) + rand(0, 8) }}px;"></div>
                    @endfor
                </div>
            </div>
        </div>

        {{-- Stat 2: Patents --}}
        <div class="group relative">
            <div class="relative overflow-hidden rounded-2xl border border-neutral-200 bg-white/50 p-8 backdrop-blur transition hover:border-primary-500/30">
                {{-- Decorative corner --}}
                <div class="absolute right-0 top-0 h-20 w-20 translate-x-1/2 -translate-y-1/2 rounded-full bg-primary-500/10"></div>

                {{-- Icon --}}
                <div class="mb-4 flex h-14 w-14 items-center justify-center rounded-xl bg-primary-500/10">
                    <svg class="h-7 w-7 text-primary-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                    </svg>
                </div>

                {{-- Value --}}
                <div class="mb-2 flex items-baseline gap-1">
                    <span class="text-5xl font-bold text-neutral-900">3</span>
                </div>

                {{-- Label --}}
                <p class="text-lg font-medium text-neutral-900">Granted Patents</p>
                <p class="mt-1 text-sm text-neutral-500">In identity authentication</p>

                {{-- Visual: Patent badges --}}
                <div class="mt-6 flex gap-2">
                    <div class="flex h-10 w-10 items-center justify-center rounded-lg border border-primary-500/30 bg-primary-500/10">
                        <svg class="h-5 w-5 text-primary-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="flex h-10 w-10 items-center justify-center rounded-lg border border-primary-500/30 bg-primary-500/10">
                        <svg class="h-5 w-5 text-primary-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="flex h-10 w-10 items-center justify-center rounded-lg border border-primary-500/30 bg-primary-500/10">
                        <svg class="h-5 w-5 text-primary-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        {{-- Stat 3: Accuracy --}}
        <div class="group relative">
            <div class="relative overflow-hidden rounded-2xl border border-neutral-200 bg-white/50 p-8 backdrop-blur transition hover:border-primary-500/30">
                {{-- Decorative corner --}}
                <div class="absolute right-0 top-0 h-20 w-20 translate-x-1/2 -translate-y-1/2 rounded-full bg-green-500/10"></div>

                {{-- Icon --}}
                <div class="mb-4 flex h-14 w-14 items-center justify-center rounded-xl bg-green-500/10">
                    <svg class="h-7 w-7 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                    </svg>
                </div>

                {{-- Value --}}
                <div class="mb-2 flex items-baseline gap-1">
                    <span class="text-5xl font-bold text-neutral-900">99.9</span>
                    <span class="text-3xl font-bold text-green-500">%</span>
                </div>

                {{-- Label --}}
                <p class="text-lg font-medium text-neutral-900">Verification Accuracy</p>
                <p class="mt-1 text-sm text-neutral-500">Capture authenticity rate</p>

                {{-- Visual: Circular progress --}}
                <div class="mt-6 flex items-center gap-3">
                    <div class="relative h-10 w-10">
                        <svg class="h-10 w-10 -rotate-90" viewBox="0 0 36 36">
                            <path class="text-neutral-200" stroke-width="3" fill="none" stroke="currentColor"
                                  d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"/>
                            <path class="text-green-500" stroke-width="3" stroke-linecap="round" fill="none" stroke="currentColor"
                                  stroke-dasharray="99.9, 100"
                                  d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"/>
                        </svg>
                    </div>
                    <span class="text-sm text-neutral-500">Industry-leading accuracy</span>
                </div>
            </div>
        </div>
    </div>
</div>
