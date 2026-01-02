@extends('layouts.app')

@section('title', 'Developers - SDK & API Documentation')

@section('content')
    {{-- Hero Section --}}
    <x-section bg="brand" class="pt-24">
        <div class="mx-auto max-w-4xl text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-100">
                For Developers
            </p>
            <h1 class="mt-4 text-4xl font-bold text-white md:text-5xl lg:text-6xl">
                Build with the industry's most secure <span class="text-brand-100">photo capture platform</span>
            </h1>
            <p class="mx-auto mt-6 max-w-2xl text-lg text-brand-100 md:text-xl">
                Simple integration, powerful protection. Add capture-level security to your app in hours, not weeks.
            </p>
            <div class="mt-10 flex flex-wrap justify-center gap-4">
                <x-button href="{{ route('contact') }}" variant="white" size="lg">Get API Key</x-button>
                <x-button href="#quick-start" variant="outline-white" size="lg">View Documentation</x-button>
            </div>
        </div>
    </x-section>

    {{-- Quick Start --}}
    <x-section id="quick-start">
        <div class="text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-500">Quick Start</p>
            <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">Get up and running in minutes</h2>
        </div>

        <div class="mt-12 grid gap-8 lg:grid-cols-3">
            {{-- iOS --}}
            <div>
                <div class="flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-surface-800/50">
                        <svg class="h-6 w-6 text-gray-300" viewBox="0 0 24 24" fill="currentColor"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white">iOS (CocoaPods)</h3>
                </div>
                <div class="mt-4 overflow-hidden rounded-lg border border-surface-700 bg-surface-900">
                    <div class="flex items-center gap-2 border-b border-surface-700 bg-surface-800 px-4 py-2">
                        <span class="h-3 w-3 rounded-full bg-red-500"></span>
                        <span class="h-3 w-3 rounded-full bg-yellow-500"></span>
                        <span class="h-3 w-3 rounded-full bg-green-500/100"></span>
                        <span class="ml-2 text-xs text-gray-400">Podfile</span>
                    </div>
                    <pre class="overflow-x-auto p-4 text-sm"><code class="text-gray-300">pod <span class="text-green-400">'PixaProof'</span></code></pre>
                </div>
            </div>

            {{-- Android --}}
            <div>
                <div class="flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-surface-800/50">
                        <svg class="h-6 w-6 text-gray-300" viewBox="0 0 24 24" fill="currentColor"><path d="M17.523 15.34c-.5 0-.909.41-.909.91s.41.91.91.91.909-.41.909-.91-.41-.91-.91-.91m-11.046 0c-.5 0-.91.41-.91.91s.41.91.91.91.91-.41.91-.91-.41-.91-.91-.91m11.046-6.88l1.59-2.89c.09-.16.04-.36-.11-.45-.16-.09-.36-.04-.45.11l-1.61 2.93c-1.34-.59-2.85-.92-4.47-.92s-3.13.33-4.47.92L6.44 6.11c-.09-.16-.29-.2-.45-.11-.15.09-.2.29-.11.45l1.59 2.89C4.75 10.6 2.86 13.41 2.5 16.61h19c-.36-3.2-2.25-6.01-4.97-7.21"/></svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white">Android (Gradle)</h3>
                </div>
                <div class="mt-4 overflow-hidden rounded-lg border border-surface-700 bg-surface-900">
                    <div class="flex items-center gap-2 border-b border-surface-700 bg-surface-800 px-4 py-2">
                        <span class="h-3 w-3 rounded-full bg-red-500"></span>
                        <span class="h-3 w-3 rounded-full bg-yellow-500"></span>
                        <span class="h-3 w-3 rounded-full bg-green-500/100"></span>
                        <span class="ml-2 text-xs text-gray-400">build.gradle</span>
                    </div>
                    <pre class="overflow-x-auto p-4 text-sm"><code class="text-gray-300">implementation <span class="text-green-400">'com.pixaproof:sdk:1.0.0'</span></code></pre>
                </div>
            </div>

            {{-- React Native --}}
            <div>
                <div class="flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-surface-800/50">
                        <svg class="h-6 w-6 text-gray-300" viewBox="0 0 24 24" fill="currentColor"><path d="M12 10.11c1.03 0 1.87.84 1.87 1.89 0 1-.84 1.85-1.87 1.85-1.03 0-1.87-.85-1.87-1.85 0-1.05.84-1.89 1.87-1.89M7.37 20c.63.38 2.01-.2 3.6-1.7-.52-.59-1.03-1.23-1.51-1.9-.82-.08-1.63-.2-2.4-.36-.51 2.14-.32 3.61.31 3.96m.71-5.74l-.29-.51c-.11.29-.22.58-.29.86.27.06.57.11.88.16l-.3-.51m6.54-.76l.81-1.5-.81-1.5c-.3-.53-.62-1-.91-1.47C13.17 9 12.6 9 12 9c-.6 0-1.17 0-1.71.03-.29.47-.61.94-.91 1.47L8.57 12l.81 1.5c.3.53.62 1 .91 1.47.54.03 1.11.03 1.71.03.6 0 1.17 0 1.71-.03.29-.47.61-.94.91-1.47M12 6.78c-.19.22-.39.45-.59.72h1.18c-.2-.27-.4-.5-.59-.72m0 10.44c.19-.22.39-.45.59-.72h-1.18c.2.27.4.5.59.72M16.62 4c-.62-.38-2 .2-3.59 1.7.52.59 1.03 1.23 1.51 1.9.82.08 1.63.2 2.4.36.51-2.14.32-3.61-.32-3.96m-.7 5.74l.29.51c.11-.29.22-.58.29-.86-.27-.06-.57-.11-.88-.16l.3.51m1.45-7.05c1.47.84 1.63 3.05 1.01 5.63 2.54.75 4.37 1.99 4.37 3.68 0 1.69-1.83 2.93-4.37 3.68.62 2.58.46 4.79-1.01 5.63-1.46.84-3.45-.12-5.37-1.95-1.92 1.83-3.91 2.79-5.38 1.95-1.46-.84-1.62-3.05-1-5.63-2.54-.75-4.37-1.99-4.37-3.68 0-1.69 1.83-2.93 4.37-3.68-.62-2.58-.46-4.79 1-5.63 1.47-.84 3.46.12 5.38 1.95 1.92-1.83 3.91-2.79 5.37-1.95"/></svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white">React Native</h3>
                </div>
                <div class="mt-4 overflow-hidden rounded-lg border border-surface-700 bg-surface-900">
                    <div class="flex items-center gap-2 border-b border-surface-700 bg-surface-800 px-4 py-2">
                        <span class="h-3 w-3 rounded-full bg-red-500"></span>
                        <span class="h-3 w-3 rounded-full bg-yellow-500"></span>
                        <span class="h-3 w-3 rounded-full bg-green-500/100"></span>
                        <span class="ml-2 text-xs text-gray-400">Terminal</span>
                    </div>
                    <pre class="overflow-x-auto p-4 text-sm"><code class="text-gray-300">npm install <span class="text-green-400">pixaproof-react-native</span></code></pre>
                </div>
            </div>
        </div>

        {{-- Initialize --}}
        <div class="mx-auto mt-12 max-w-2xl">
            <h3 class="text-center text-lg font-semibold text-white">Initialize the SDK</h3>
            <div class="mt-4 overflow-hidden rounded-lg border border-surface-700 bg-surface-900">
                <div class="flex items-center gap-2 border-b border-surface-700 bg-surface-800 px-4 py-2">
                    <span class="h-3 w-3 rounded-full bg-red-500"></span>
                    <span class="h-3 w-3 rounded-full bg-yellow-500"></span>
                    <span class="h-3 w-3 rounded-full bg-green-500/100"></span>
                    <span class="ml-2 text-xs text-gray-400">app.swift</span>
                </div>
                <pre class="overflow-x-auto p-4 text-sm"><code class="text-gray-300"><span class="text-purple-400">import</span> <span class="text-blue-400">PixaProof</span>

PixaProof.<span class="text-yellow-400">configure</span>(apiKey: <span class="text-green-400">"your_api_key"</span>)</code></pre>
            </div>
        </div>
    </x-section>

    {{-- Code Examples --}}
    <x-section bg="surface">
        <div class="text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-500">Code Examples</p>
            <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">Capture Photos with Confidence</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-gray-300">
                A few lines of code is all you need. Gallery injection is blocked at the SDK level.
            </p>
        </div>

        <div class="mt-12 grid gap-8 lg:grid-cols-2">
            {{-- Swift Example --}}
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <span class="rounded-full bg-orange-500/10 px-3 py-1 text-sm font-medium text-orange-500">Swift (iOS)</span>
                </div>
                <div class="overflow-hidden rounded-lg border border-surface-700 bg-surface-900">
                    <div class="flex items-center gap-2 border-b border-surface-700 bg-surface-800 px-4 py-2">
                        <span class="h-3 w-3 rounded-full bg-red-500"></span>
                        <span class="h-3 w-3 rounded-full bg-yellow-500"></span>
                        <span class="h-3 w-3 rounded-full bg-green-500/100"></span>
                        <span class="ml-2 text-xs text-gray-400">CaptureViewController.swift</span>
                    </div>
                    <pre class="overflow-x-auto p-4 text-sm leading-relaxed"><code class="text-gray-300"><span class="text-purple-400">import</span> <span class="text-blue-400">PixaProof</span>

<span class="text-purple-400">let</span> config = PixaProof.<span class="text-blue-400">CaptureConfig</span>(
    captureType: .<span class="text-yellow-400">document</span>,
    documentType: .<span class="text-yellow-400">nationalID</span>,
    requireBothSides: <span class="text-orange-400">true</span>,
    qualityThreshold: .<span class="text-yellow-400">high</span>
)

PixaProof.Camera.<span class="text-yellow-400">capture</span>(config: config) { result <span class="text-purple-400">in</span>
    <span class="text-purple-400">switch</span> result {
    <span class="text-purple-400">case</span> .<span class="text-yellow-400">success</span>(<span class="text-purple-400">let</span> photos):
        <span class="text-gray-500">// Photos are cryptographically signed</span>
        <span class="text-gray-500">// Gallery injection blocked at SDK level</span>
        <span class="text-purple-400">self</span>.<span class="text-yellow-400">verifyPhotos</span>(photos)
    <span class="text-purple-400">case</span> .<span class="text-yellow-400">failure</span>(<span class="text-purple-400">let</span> error):
        <span class="text-purple-400">self</span>.<span class="text-yellow-400">handleError</span>(error)
    }
}</code></pre>
                </div>
            </div>

            {{-- Kotlin Example --}}
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <span class="rounded-full bg-purple-500/10 px-3 py-1 text-sm font-medium text-purple-500">Kotlin (Android)</span>
                </div>
                <div class="overflow-hidden rounded-lg border border-surface-700 bg-surface-900">
                    <div class="flex items-center gap-2 border-b border-surface-700 bg-surface-800 px-4 py-2">
                        <span class="h-3 w-3 rounded-full bg-red-500"></span>
                        <span class="h-3 w-3 rounded-full bg-yellow-500"></span>
                        <span class="h-3 w-3 rounded-full bg-green-500/100"></span>
                        <span class="ml-2 text-xs text-gray-400">CaptureActivity.kt</span>
                    </div>
                    <pre class="overflow-x-auto p-4 text-sm leading-relaxed"><code class="text-gray-300"><span class="text-purple-400">val</span> config = CaptureConfig.<span class="text-blue-400">Builder</span>()
    .<span class="text-yellow-400">setCaptureType</span>(CaptureType.<span class="text-orange-400">DOCUMENT</span>)
    .<span class="text-yellow-400">setDocumentType</span>(DocumentType.<span class="text-orange-400">NATIONAL_ID</span>)
    .<span class="text-yellow-400">setRequireBothSides</span>(<span class="text-orange-400">true</span>)
    .<span class="text-yellow-400">setQualityThreshold</span>(QualityThreshold.<span class="text-orange-400">HIGH</span>)
    .<span class="text-yellow-400">build</span>()

PixaProof.Camera.<span class="text-yellow-400">capture</span>(<span class="text-purple-400">this</span>, config) { result ->
    <span class="text-purple-400">when</span> (result) {
        <span class="text-purple-400">is</span> Result.Success -> <span class="text-yellow-400">verifyPhotos</span>(result.photos)
        <span class="text-purple-400">is</span> Result.Failure -> <span class="text-yellow-400">handleError</span>(result.error)
    }
}</code></pre>
                </div>
            </div>
        </div>

        {{-- React Native Example --}}
        <div class="mx-auto mt-8 max-w-3xl">
            <div class="flex items-center gap-3 mb-4">
                <span class="rounded-full bg-cyan-500/10 px-3 py-1 text-sm font-medium text-cyan-500">React Native</span>
            </div>
            <div class="overflow-hidden rounded-lg border border-surface-700 bg-surface-900">
                <div class="flex items-center gap-2 border-b border-surface-700 bg-surface-800 px-4 py-2">
                    <span class="h-3 w-3 rounded-full bg-red-500"></span>
                    <span class="h-3 w-3 rounded-full bg-yellow-500"></span>
                    <span class="h-3 w-3 rounded-full bg-green-500/100"></span>
                    <span class="ml-2 text-xs text-gray-400">DocumentCapture.js</span>
                </div>
                <pre class="overflow-x-auto p-4 text-sm leading-relaxed"><code class="text-gray-300"><span class="text-purple-400">import</span> { PixaProof, CaptureType, DocumentType } <span class="text-purple-400">from</span> <span class="text-green-400">'pixaproof-react-native'</span>;

<span class="text-purple-400">const</span> config = {
  captureType: CaptureType.<span class="text-orange-400">DOCUMENT</span>,
  documentType: DocumentType.<span class="text-orange-400">NATIONAL_ID</span>,
  requireBothSides: <span class="text-orange-400">true</span>,
  qualityThreshold: <span class="text-green-400">'high'</span>
};

<span class="text-gray-500">// Gallery access blocked at native level</span>
<span class="text-purple-400">const</span> photos = <span class="text-purple-400">await</span> PixaProof.Camera.<span class="text-yellow-400">capture</span>(config);
<span class="text-purple-400">const</span> response = <span class="text-purple-400">await</span> PixaProof.API.<span class="text-yellow-400">verify</span>(photos);

<span class="text-purple-400">if</span> (response.status === <span class="text-green-400">'verified'</span>) {
  console.<span class="text-yellow-400">log</span>(<span class="text-green-400">`Verified with </span><span class="text-purple-400">${</span>response.confidenceScore<span class="text-purple-400">}</span><span class="text-green-400"> confidence`</span>);
}</code></pre>
            </div>
        </div>
    </x-section>

    {{-- Verification API --}}
    <x-section>
        <div class="text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-500">REST API</p>
            <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">Verification API</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-gray-300">
                Simple REST endpoints for photo verification. Get results in under 500ms.
            </p>
        </div>

        <div class="mt-12 grid gap-8 lg:grid-cols-2">
            {{-- Request --}}
            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Request</h3>
                <div class="overflow-hidden rounded-lg border border-surface-700 bg-surface-900">
                    <div class="flex items-center justify-between border-b border-surface-700 bg-surface-800 px-4 py-2">
                        <div class="flex items-center gap-2">
                            <span class="rounded bg-green-500/100/20 px-2 py-0.5 text-xs font-medium text-green-400">POST</span>
                            <span class="text-sm text-gray-300">/v1/verify</span>
                        </div>
                    </div>
                    <pre class="overflow-x-auto p-4 text-sm leading-relaxed"><code class="text-gray-300"><span class="text-gray-500">// Base URL</span>
https://api.pixaproof.com/v1/

<span class="text-gray-500">// Authentication</span>
Authorization: Bearer {your_api_key}

<span class="text-gray-500">// Headers</span>
Content-Type: multipart/form-data

<span class="text-gray-500">// Parameters</span>
image: File <span class="text-gray-500">(required)</span>
metadata: JSON <span class="text-gray-500">(optional)</span>
webhook_url: String <span class="text-gray-500">(optional)</span></code></pre>
                </div>

                {{-- Additional Endpoints --}}
                <div class="mt-6">
                    <h4 class="text-sm font-semibold text-gray-400 mb-3">Additional Endpoints</h4>
                    <div class="space-y-2">
                        <div class="flex items-center gap-3 rounded-lg border border-surface-700 bg-surface-800 p-3">
                            <span class="rounded bg-green-500/100/10 px-2 py-0.5 text-xs font-medium text-green-500">POST</span>
                            <span class="text-sm text-gray-300">/v1/verify/batch</span>
                            <span class="text-xs text-gray-400">Batch verify multiple photos</span>
                        </div>
                        <div class="flex items-center gap-3 rounded-lg border border-surface-700 bg-surface-800 p-3">
                            <span class="rounded bg-blue-500/10 px-2 py-0.5 text-xs font-medium text-blue-500">GET</span>
                            <span class="text-sm text-gray-300">/v1/verify/{id}</span>
                            <span class="text-xs text-gray-400">Get verification details</span>
                        </div>
                        <div class="flex items-center gap-3 rounded-lg border border-surface-700 bg-surface-800 p-3">
                            <span class="rounded bg-blue-500/10 px-2 py-0.5 text-xs font-medium text-blue-500">GET</span>
                            <span class="text-sm text-gray-300">/v1/audit/{id}</span>
                            <span class="text-xs text-gray-400">Retrieve audit trail</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Response --}}
            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Response</h3>
                <div class="overflow-hidden rounded-lg border border-surface-700 bg-surface-900">
                    <div class="flex items-center justify-between border-b border-surface-700 bg-surface-800 px-4 py-2">
                        <span class="text-sm text-gray-300">JSON Response</span>
                        <span class="rounded bg-green-500/100/20 px-2 py-0.5 text-xs font-medium text-green-400">200 OK</span>
                    </div>
                    <pre class="overflow-x-auto p-4 text-sm leading-relaxed"><code class="text-gray-300">{
  <span class="text-blue-400">"verification_id"</span>: <span class="text-green-400">"vrf_8k3j2h4g5f6d7s8a"</span>,
  <span class="text-blue-400">"status"</span>: <span class="text-green-400">"verified"</span>,
  <span class="text-blue-400">"confidence_score"</span>: <span class="text-orange-400">0.98</span>,
  <span class="text-blue-400">"live_capture_confirmed"</span>: <span class="text-orange-400">true</span>,
  <span class="text-blue-400">"transmission_integrity"</span>: <span class="text-green-400">"confirmed"</span>,
  <span class="text-blue-400">"capture_timestamp"</span>: <span class="text-green-400">"2025-12-06T10:30:45.123Z"</span>,
  <span class="text-blue-400">"device_fingerprint"</span>: <span class="text-green-400">"d4e5f6g7h8i9j0k1"</span>,
  <span class="text-blue-400">"geolocation"</span>: {
    <span class="text-blue-400">"latitude"</span>: <span class="text-orange-400">1.3521</span>,
    <span class="text-blue-400">"longitude"</span>: <span class="text-orange-400">103.8198</span>,
    <span class="text-blue-400">"accuracy"</span>: <span class="text-orange-400">15</span>,
    <span class="text-blue-400">"spoofing_detected"</span>: <span class="text-orange-400">false</span>
  },
  <span class="text-blue-400">"tampering_indicators"</span>: [],
  <span class="text-blue-400">"ai_generation_probability"</span>: <span class="text-orange-400">0.02</span>,
  <span class="text-blue-400">"audit_trail_url"</span>: <span class="text-green-400">"https://..."</span>
}</code></pre>
                </div>
            </div>
        </div>
    </x-section>

    {{-- SDK Features --}}
    <x-section bg="surface" pattern="hexagonal" pattern-opacity="0.05">
        <div class="text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-500">SDK Features</p>
            <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">Everything you need to build secure apps</h2>
        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            <x-card.feature title="Live Capture Enforcement" description="Gallery access completely blocked at the native level. No workarounds possible.">
                <x-slot:icon>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                    </svg>
                </x-slot:icon>
            </x-card.feature>

            <x-card.feature title="Cryptographic Signing" description="PIEA™ signature embedded at capture time. Tamper-evident from the moment of creation.">
                <x-slot:icon>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                    </svg>
                </x-slot:icon>
            </x-card.feature>

            <x-card.feature title="Anti-Spoofing" description="Emulator detection, screenshot prevention, and virtual device blocking built in.">
                <x-slot:icon>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                    </svg>
                </x-slot:icon>
            </x-card.feature>

            <x-card.feature title="Offline Capability" description="Local signature generation with automatic sync when connectivity is restored.">
                <x-slot:icon>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                    </svg>
                </x-slot:icon>
            </x-card.feature>

            <x-card.feature title="Custom Workflows" description="Configurable capture requirements for documents, selfies, and multi-step verification.">
                <x-slot:icon>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
                    </svg>
                </x-slot:icon>
            </x-card.feature>

            <x-card.feature title="White-Label UI" description="Fully customizable branding, colors, and messaging to match your app's design.">
                <x-slot:icon>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42" />
                    </svg>
                </x-slot:icon>
            </x-card.feature>
        </div>
    </x-section>

    {{-- Integration Timeline --}}
    <x-section>
        <div class="text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-500">Integration</p>
            <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">From setup to production</h2>
        </div>

        <div class="mx-auto mt-12 max-w-3xl">
            <div class="relative">
                {{-- Timeline line --}}
                <div class="absolute left-8 top-0 h-full w-0.5 bg-surface-700 md:left-1/2 md:-ml-px"></div>

                {{-- Day 1 --}}
                <div class="relative mb-8 flex items-center">
                    <div class="flex w-16 shrink-0 items-center justify-center md:w-1/2 md:pr-8 md:justify-end">
                        <span class="text-sm font-semibold text-brand-500">Day 1</span>
                    </div>
                    <div class="absolute left-8 flex h-6 w-6 items-center justify-center rounded-full bg-brand-500 text-white md:left-1/2 md:-ml-3">
                        <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                    <div class="ml-12 flex-1 md:ml-8 md:w-1/2">
                        <x-card padding="md">
                            <h4 class="font-semibold text-white">Setup & Credentials</h4>
                            <p class="mt-1 text-sm text-gray-400">Get API keys and configure your development environment</p>
                        </x-card>
                    </div>
                </div>

                {{-- Days 1-2 --}}
                <div class="relative mb-8 flex items-center">
                    <div class="flex w-16 shrink-0 items-center justify-center md:w-1/2 md:pr-8 md:justify-end">
                        <span class="text-sm font-semibold text-brand-500">Days 1-2</span>
                    </div>
                    <div class="absolute left-8 flex h-6 w-6 items-center justify-center rounded-full bg-brand-500 text-white md:left-1/2 md:-ml-3">
                        <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                    <div class="ml-12 flex-1 md:ml-8 md:w-1/2">
                        <x-card padding="md">
                            <h4 class="font-semibold text-white">SDK Integration</h4>
                            <p class="mt-1 text-sm text-gray-400">Integrate the SDK into your iOS or Android app</p>
                        </x-card>
                    </div>
                </div>

                {{-- Day 2 --}}
                <div class="relative mb-8 flex items-center">
                    <div class="flex w-16 shrink-0 items-center justify-center md:w-1/2 md:pr-8 md:justify-end">
                        <span class="text-sm font-semibold text-brand-500">Day 2</span>
                    </div>
                    <div class="absolute left-8 flex h-6 w-6 items-center justify-center rounded-full bg-brand-500 text-white md:left-1/2 md:-ml-3">
                        <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                    <div class="ml-12 flex-1 md:ml-8 md:w-1/2">
                        <x-card padding="md">
                            <h4 class="font-semibold text-white">API Integration</h4>
                            <p class="mt-1 text-sm text-gray-400">Connect your backend to the verification API</p>
                        </x-card>
                    </div>
                </div>

                {{-- Days 2-3 --}}
                <div class="relative mb-8 flex items-center">
                    <div class="flex w-16 shrink-0 items-center justify-center md:w-1/2 md:pr-8 md:justify-end">
                        <span class="text-sm font-semibold text-brand-500">Days 2-3</span>
                    </div>
                    <div class="absolute left-8 flex h-6 w-6 items-center justify-center rounded-full bg-brand-500 text-white md:left-1/2 md:-ml-3">
                        <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                    <div class="ml-12 flex-1 md:ml-8 md:w-1/2">
                        <x-card padding="md">
                            <h4 class="font-semibold text-white">Testing & QA</h4>
                            <p class="mt-1 text-sm text-gray-400">Test integration with sandbox environment</p>
                        </x-card>
                    </div>
                </div>

                {{-- Week 2 --}}
                <div class="relative flex items-center">
                    <div class="flex w-16 shrink-0 items-center justify-center md:w-1/2 md:pr-8 md:justify-end">
                        <span class="text-sm font-semibold text-green-500">Week 2</span>
                    </div>
                    <div class="absolute left-8 flex h-6 w-6 items-center justify-center rounded-full bg-green-500/100 text-white md:left-1/2 md:-ml-3">
                        <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                    <div class="ml-12 flex-1 md:ml-8 md:w-1/2">
                        <x-card padding="md" class="border-green-500/30 bg-green-500/10">
                            <h4 class="font-semibold text-white">Production Deployment</h4>
                            <p class="mt-1 text-sm text-gray-400">Go live with production credentials</p>
                        </x-card>
                    </div>
                </div>
            </div>
        </div>
    </x-section>

    {{-- Final CTA Section --}}
    <x-section bg="brand" bg-image="/images/backgrounds/gradient-mesh.svg">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-white md:text-4xl">Start building today</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-brand-100">
                Get your API key and start integrating secure photo capture into your application.
            </p>
            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <x-button href="{{ route('contact') }}" variant="white" size="lg">Get API Key</x-button>
                <x-button href="#" variant="ghost" size="lg" class="text-white hover:text-white/80">View Full Documentation</x-button>
            </div>
        </div>
    </x-section>
@endsection
