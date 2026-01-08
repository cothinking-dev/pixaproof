<div>
    @if($submitted)
        <div class="rounded bg-green-50 border border-green-200 p-6 text-center">
            <svg class="mx-auto h-12 w-12 text-green-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <h3 class="mt-4 text-lg font-semibold text-green-900">Message Sent!</h3>
            <p class="mt-2 text-green-700">Thank you for reaching out. We'll get back to you within 24 hours.</p>
        </div>
    @else
        <form wire:submit="submit" class="space-y-6">
            @if($error)
                <div class="rounded bg-red-50 border border-red-200 p-4 text-sm text-red-700">
                    {{ $error }}
                </div>
            @endif

            <div class="grid gap-6 sm:grid-cols-2">
                <div>
                    <label for="name" class="block text-sm font-medium text-neutral-700">
                        Name <span class="text-red-600">*</span>
                    </label>
                    <input
                        type="text"
                        id="name"
                        wire:model="name"
                        class="mt-1 block w-full rounded border-neutral-300 bg-white text-neutral-900 shadow-sm focus:border-primary-500 focus:ring-primary-500"
                    >
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-neutral-700">
                        Email <span class="text-red-600">*</span>
                    </label>
                    <input
                        type="email"
                        id="email"
                        wire:model="email"
                        class="mt-1 block w-full rounded border-neutral-300 bg-white text-neutral-900 shadow-sm focus:border-primary-500 focus:ring-primary-500"
                    >
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid gap-6 sm:grid-cols-2">
                <div>
                    <label for="phone" class="block text-sm font-medium text-neutral-700">
                        Phone
                    </label>
                    <input
                        type="tel"
                        id="phone"
                        wire:model="phone"
                        class="mt-1 block w-full rounded border-neutral-300 bg-white text-neutral-900 shadow-sm focus:border-primary-500 focus:ring-primary-500"
                    >
                    @error('phone')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="company" class="block text-sm font-medium text-neutral-700">
                        Company
                    </label>
                    <input
                        type="text"
                        id="company"
                        wire:model="company"
                        class="mt-1 block w-full rounded border-neutral-300 bg-white text-neutral-900 shadow-sm focus:border-primary-500 focus:ring-primary-500"
                    >
                    @error('company')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid gap-6 sm:grid-cols-2">
                <div>
                    <label for="jobTitle" class="block text-sm font-medium text-neutral-700">
                        Job Title
                    </label>
                    <input
                        type="text"
                        id="jobTitle"
                        wire:model="jobTitle"
                        placeholder="e.g., CTO, Compliance Officer"
                        class="mt-1 block w-full rounded border-neutral-300 bg-white text-neutral-900 shadow-sm focus:border-primary-500 focus:ring-primary-500"
                    >
                    @error('jobTitle')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="industry" class="block text-sm font-medium text-neutral-700">
                        Industry
                    </label>
                    <select
                        id="industry"
                        wire:model="industry"
                        class="mt-1 block w-full rounded border-neutral-300 bg-white text-neutral-900 shadow-sm focus:border-primary-500 focus:ring-primary-500"
                    >
                        <option value="">Select an industry</option>
                        <option value="banking">Banking & Finance</option>
                        <option value="insurance">Insurance</option>
                        <option value="government">Government</option>
                        <option value="healthcare">Healthcare</option>
                        <option value="ecommerce">E-commerce</option>
                        <option value="real-estate">Real Estate</option>
                        <option value="other">Other</option>
                    </select>
                    @error('industry')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div>
                <label for="inquiryType" class="block text-sm font-medium text-neutral-700">
                    Inquiry Type <span class="text-red-600">*</span>
                </label>
                <select
                    id="inquiryType"
                    wire:model="inquiryType"
                    class="mt-1 block w-full rounded border-neutral-300 bg-white text-neutral-900 shadow-sm focus:border-primary-500 focus:ring-primary-500"
                >
                    <option value="demo">Request Demo</option>
                    <option value="api-access">API Access</option>
                    <option value="implementation">Implementation Services</option>
                    <option value="general">General Inquiry</option>
                </select>
                @error('inquiryType')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-neutral-700">
                    Message <span class="text-red-600">*</span>
                </label>
                <textarea
                    id="message"
                    wire:model="message"
                    rows="5"
                    placeholder="Tell us about your use case and requirements..."
                    class="mt-1 block w-full rounded border-neutral-300 bg-white text-neutral-900 shadow-sm focus:border-primary-500 focus:ring-primary-500"
                ></textarea>
                @error('message')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button
                    type="submit"
                    wire:loading.attr="disabled"
                    wire:loading.class="opacity-50 cursor-not-allowed"
                    class="inline-flex w-full items-center justify-center rounded bg-accent-500 px-6 py-3 text-base font-medium text-white shadow-sm transition hover:bg-accent-600 focus:outline-none focus:ring-2 focus:ring-accent-500 focus:ring-offset-2"
                >
                    <span wire:loading.remove>Send Message</span>
                    <span wire:loading class="flex items-center">
                        <svg class="mr-2 h-4 w-4 animate-spin" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        Sending...
                    </span>
                </button>
            </div>

            <p class="text-sm text-neutral-500">
                By submitting this form, you agree to our <a href="{{ route('privacy') }}" class="text-primary-600 hover:text-primary-700 underline">Privacy Policy</a>.
            </p>
        </form>
    @endif
</div>
