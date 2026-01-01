@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <section class="py-20">
        <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-white">Get in Touch</h1>
                <p class="mt-4 text-lg text-gray-300">
                    Have questions about PixaProof? We'd love to hear from you.
                </p>
            </div>

            <div class="mt-12">
                <livewire:contact-form />
            </div>
        </div>
    </section>
@endsection
