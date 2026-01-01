<?php

namespace App\Livewire\Concerns;

use Illuminate\Support\Facades\RateLimiter;

trait WithRateLimiting
{
    public ?string $rateLimitError = null;

    protected function checkRateLimit(string $key, int $maxAttempts, int $decaySeconds): bool
    {
        $fullKey = "{$key}:".request()->ip();

        if (RateLimiter::tooManyAttempts($fullKey, $maxAttempts)) {
            $seconds = RateLimiter::availableIn($fullKey);
            $this->rateLimitError = "Too many attempts. Please try again in {$seconds} seconds.";

            return false;
        }

        RateLimiter::hit($fullKey, $decaySeconds);

        return true;
    }

    protected function clearRateLimitError(): void
    {
        $this->rateLimitError = null;
    }
}
