@extends('layouts.app')

@section('title', 'Contact')
@section('description', 'Book a demo, discuss your use case, or explore integration options with the PixaProof solutions team.')

@section('content')
    {{-- Hero Section --}}
    <section class="relative isolate overflow-hidden px-4 pt-32 pb-32 lg:pt-40 lg:pb-40">
        <div class="absolute inset-0 -z-10">
            <div class="absolute inset-0 bg-gradient-to-br from-primary-50 via-white to-primary-50/50"></div>
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#0ea5e910_1px,transparent_1px),linear-gradient(to_bottom,#0ea5e910_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
        </div>

        <div class="relative z-10 mx-auto max-w-3xl text-center">
            <div class="inline-flex items-center gap-2 rounded-full border border-primary-500/40 bg-primary-500/10 px-4 py-2 mb-6">
                <svg class="h-4 w-4 text-primary-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                </svg>
                <span class="text-sm font-medium text-primary-600">Contact Sales</span>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-neutral-900 mb-4">Talk to Our Team</h1>
            <p class="text-lg text-neutral-600 max-w-xl mx-auto">
                See PixaProof in action. Book a 20-minute demo, discuss your use case, or explore integration options with our solutions team.
            </p>
        </div>
    </section>

    {{-- Form Section --}}
    <section class="bg-white pb-20">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
            <div class="-mt-16 relative z-20 rounded border border-neutral-200 bg-white p-8 shadow-lg">
                <livewire:contact-form />
            </div>

            <p class="mt-6 text-center text-sm text-neutral-500">
                Built by the team behind 10M+ identity verifications across ASEAN — with ISO 30107-3 certification and 3 granted patents.
            </p>

            <div class="mt-12 grid gap-6 sm:grid-cols-3 text-center">
                <div class="rounded bg-neutral-50 p-6">
                    <svg class="mx-auto h-8 w-8 text-primary-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="mt-3 text-sm font-medium text-neutral-900">24-Hour Response</p>
                    <p class="mt-1 text-xs text-neutral-500">We reply within one business day</p>
                </div>
                <div class="rounded bg-neutral-50 p-6">
                    <svg class="mx-auto h-8 w-8 text-primary-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                    </svg>
                    <p class="mt-3 text-sm font-medium text-neutral-900">Technical Demo</p>
                    <p class="mt-1 text-xs text-neutral-500">See PixaProof in action</p>
                </div>
                <div class="rounded bg-neutral-50 p-6">
                    <svg class="mx-auto h-8 w-8 text-primary-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                    </svg>
                    <p class="mt-3 text-sm font-medium text-neutral-900">Enterprise Support</p>
                    <p class="mt-1 text-xs text-neutral-500">Dedicated account management</p>
                </div>
            </div>
        </div>
    </section>
@endsection
