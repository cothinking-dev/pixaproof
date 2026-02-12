@props([
    'tabs' => [],
])

<div
    x-data="{
        activeTab: 0,
        tabs: {{ Js::from($tabs) }},

        async switchTab(index) {
            if (this.activeTab === index) return;

            const imageEl = this.$refs.image;
            const contentEl = this.$refs.content;

            // Fade out
            await window.Motion.animate(
                [imageEl, contentEl],
                { opacity: 0 },
                { duration: 0.15 }
            ).finished;

            // Switch tab
            this.activeTab = index;

            // Fade in
            await window.Motion.animate(
                [imageEl, contentEl],
                { opacity: 1 },
                { duration: 0.2 }
            ).finished;
        }
    }"
    {{ $attributes }}
>
    {{-- Desktop: 2-column hover tabs --}}
    <div class="max-w-5xl mx-auto hidden lg:grid lg:grid-cols-5 lg:gap-12">
        {{-- Left: Hoverable text list --}}
        <div class="space-y-1 col-span-2">
            <template x-for="(tab, index) in tabs" :key="index">
                <button
                    @mouseenter="switchTab(index)"
                    :class="activeTab === index
                        ? 'text-primary-600 bg-primary-500/5'
                        : 'text-neutral-400 hover:text-neutral-900 hover:bg-neutral-100'"
                    class="w-full rounded-lg px-4 py-3 text-left text-lg font-medium transition-all"
                >
                    <span x-text="tab.title"></span>
                </button>
            </template>
        </div>

        {{-- Right: Image + footer with icon --}}
        <div class="sticky top-24 col-span-3">
            <div class="overflow-hidden rounded-2xl border border-neutral-200 bg-white">
                {{-- Image --}}
                <div class="aspect-video overflow-hidden bg-neutral-50">
                    <img
                        x-ref="image"
                        :src="tabs[activeTab]?.image"
                        :alt="tabs[activeTab]?.title"
                        class="h-full w-full object-cover"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                    />
                    {{-- Placeholder for missing images --}}
                    <div class="hidden h-full w-full items-center justify-center bg-gradient-to-br from-neutral-800 to-neutral-900">
                        <div class="text-center">
                            <svg class="mx-auto h-16 w-16 text-neutral-400" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                            </svg>
                            <p class="mt-2 text-sm text-neutral-500">Image coming soon</p>
                        </div>
                    </div>
                </div>
                {{-- Footer with icon, title, description --}}
                <div x-ref="content" class="p-6">
                    {{-- Icon --}}
                    <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-lg bg-primary-500/10">
                        <svg class="h-5 w-5 text-primary-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" :d="tabs[activeTab]?.icon" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold text-neutral-900" x-text="tabs[activeTab]?.title"></h4>
                    <p class="mt-2 text-neutral-600" x-text="tabs[activeTab]?.description"></p>
                </div>
            </div>
        </div>
    </div>

    {{-- Mobile: Card grid fallback --}}
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:hidden">
        <template x-for="(tab, index) in tabs" :key="'mobile-' + index">
            <div class="rounded-xl border border-neutral-200 bg-white p-5">
                {{-- Icon --}}
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-primary-500/10">
                    <svg class="h-6 w-6 text-primary-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" :d="tab.icon" />
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-neutral-900" x-text="tab.title"></h3>
                <p class="mt-2 text-sm text-neutral-600" x-text="tab.description"></p>
            </div>
        </template>
    </div>
</div>
