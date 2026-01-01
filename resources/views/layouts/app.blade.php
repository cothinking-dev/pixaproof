@extends('layouts.base')

@section('body')
    <div class="flex min-h-screen flex-col bg-white dark:bg-gray-900">
        <x-navbar />

        <main class="flex-1">
            @yield('content')

            @isset($slot)
                {{ $slot }}
            @endisset
        </main>

        <x-footer />
    </div>
@endsection
