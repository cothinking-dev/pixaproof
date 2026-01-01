<footer class="border-t border-surface-700 bg-surface-900">
    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="flex flex-col items-center justify-between gap-4 md:flex-row">
            <div class="text-sm text-gray-400">
                &copy; {{ date('Y') }} PixaProof. All rights reserved.
            </div>
            <div class="flex gap-6">
                <a href="{{ route('privacy') }}" class="text-sm text-gray-400 transition hover:text-white">
                    Privacy Policy
                </a>
                <a href="{{ route('contact') }}" class="text-sm text-gray-400 transition hover:text-white">
                    Contact
                </a>
            </div>
        </div>
    </div>
</footer>
