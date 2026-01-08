<footer class="border-t border-neutral-200 bg-neutral-900">
    <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
        <!-- Main Footer Grid -->
        <div class="grid grid-cols-2 gap-8 md:grid-cols-4 lg:grid-cols-5">
            <!-- Brand Column -->
            <div class="col-span-2 lg:col-span-1">
                <span class="text-xl font-bold text-white">PixaProof</span>
                <p class="mt-4 text-sm text-neutral-400">
                    Stop injection attacks before they enter your system. Enterprise-grade image verification built by the team behind EMAS eKYC.
                </p>
                <p class="mt-4 text-sm text-neutral-500">
                    A product of MyNasional eKYC Sdn. Bhd.
                </p>
            </div>

            <!-- Solutions -->
            <div>
                <h3 class="text-sm font-semibold uppercase tracking-wider text-neutral-400">Solutions</h3>
                <ul class="mt-4 space-y-2">
                    <li><a href="{{ route('solutions.banking') }}" class="text-sm text-neutral-400 transition hover:text-primary-400">Banking & Finance</a></li>
                    <li><a href="{{ route('solutions.insurance') }}" class="text-sm text-neutral-400 transition hover:text-primary-400">Insurance</a></li>
                    <li><a href="{{ route('solutions.government') }}" class="text-sm text-neutral-400 transition hover:text-primary-400">Government</a></li>
                    <li><a href="{{ route('solutions.ecommerce') }}" class="text-sm text-neutral-400 transition hover:text-primary-400">E-commerce</a></li>
                    <li><a href="{{ route('solutions.healthcare') }}" class="text-sm text-neutral-400 transition hover:text-primary-400">Healthcare</a></li>
                    <li><a href="{{ route('solutions.real-estate') }}" class="text-sm text-neutral-400 transition hover:text-primary-400">Real Estate</a></li>
                </ul>
            </div>

            <!-- Resources -->
            <div>
                <h3 class="text-sm font-semibold uppercase tracking-wider text-neutral-400">Resources</h3>
                <ul class="mt-4 space-y-2">
                    <li><a href="{{ route('product') }}" class="text-sm text-neutral-400 transition hover:text-primary-400">Technology</a></li>
                    <li><a href="{{ route('resources.injection-attacks') }}" class="text-sm text-neutral-400 transition hover:text-primary-400">Injection Attacks</a></li>
                    <li><a href="{{ route('resources.fraud-statistics') }}" class="text-sm text-neutral-400 transition hover:text-primary-400">Fraud Statistics</a></li>
                    <li><a href="{{ route('resources.compliance') }}" class="text-sm text-neutral-400 transition hover:text-primary-400">Compliance</a></li>
                </ul>
            </div>

            <!-- Company -->
            <div>
                <h3 class="text-sm font-semibold uppercase tracking-wider text-neutral-400">Company</h3>
                <ul class="mt-4 space-y-2">
                    <li><a href="{{ route('about') }}" class="text-sm text-neutral-400 transition hover:text-primary-400">About Us</a></li>
                    <li><a href="{{ route('contact') }}" class="text-sm text-neutral-400 transition hover:text-primary-400">Contact</a></li>
                    <li><a href="{{ route('resources.case-studies') }}" class="text-sm text-neutral-400 transition hover:text-primary-400">Case Studies</a></li>
                    <li><a href="{{ route('privacy') }}" class="text-sm text-neutral-400 transition hover:text-primary-400">Privacy Policy</a></li>
                </ul>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="mt-12 border-t border-neutral-800 pt-8 flex flex-col items-center justify-between gap-4 md:flex-row">
            <div class="text-sm text-neutral-500">
                &copy; {{ date('Y') }} MyNasional eKYC Sdn. Bhd. All rights reserved.
            </div>
            <div class="flex gap-6">
                <a href="{{ route('privacy') }}" class="text-sm text-neutral-500 transition hover:text-primary-400">
                    Privacy
                </a>
                <a href="{{ route('contact') }}" class="text-sm text-neutral-500 transition hover:text-primary-400">
                    Contact
                </a>
            </div>
        </div>
    </div>
</footer>
