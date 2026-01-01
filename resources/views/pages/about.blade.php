@extends('layouts.app')

@section('title', 'About')

@section('content')
    <section class="py-20">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-gray-900 dark:text-white">About PixaProof</h1>

            <div class="prose prose-lg mt-8 dark:prose-invert">
                <p class="text-gray-600 dark:text-gray-300">
                    PixaProof is a mobile application designed to help users verify the authenticity of photographs in an age of AI-generated imagery and digital manipulation.
                </p>

                <h2 class="mt-8 text-2xl font-semibold text-gray-900 dark:text-white">Our Mission</h2>
                <p class="text-gray-600 dark:text-gray-300">
                    In a world where AI can generate incredibly realistic images, distinguishing between real and fake has become increasingly challenging. PixaProof empowers users with the tools to make informed decisions about the images they encounter online.
                </p>

                <h2 class="mt-8 text-2xl font-semibold text-gray-900 dark:text-white">How It Works</h2>
                <p class="text-gray-600 dark:text-gray-300">
                    Simply upload or share an image to PixaProof, and our advanced AI algorithms will analyze it for signs of artificial generation or manipulation. Within seconds, you'll receive a detailed report on the image's authenticity.
                </p>

                <h2 class="mt-8 text-2xl font-semibold text-gray-900 dark:text-white">Privacy Commitment</h2>
                <p class="text-gray-600 dark:text-gray-300">
                    We take your privacy seriously. Images uploaded for verification are processed in real-time and are not stored on our servers. Your data remains yours.
                </p>
            </div>

            <div class="mt-12">
                <a href="{{ route('contact') }}" class="inline-flex items-center rounded-lg bg-brand-600 px-6 py-3 text-base font-medium text-white shadow-sm transition hover:bg-brand-700">
                    Contact Us
                </a>
            </div>
        </div>
    </section>
@endsection
