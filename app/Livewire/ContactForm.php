<?php

namespace App\Livewire;

use App\Actions\SubmitContactFormAction;
use App\Livewire\Concerns\WithRateLimiting;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ContactForm extends Component
{
    use WithRateLimiting;

    #[Validate('required|string|min:2|max:100')]
    public string $name = '';

    #[Validate('required|email|max:255')]
    public string $email = '';

    #[Validate('nullable|string|regex:/^[\+]?[0-9\s\-\(\)]{10,20}$/', message: 'Please enter a valid phone number.')]
    public string $phone = '';

    #[Validate('nullable|string|max:100')]
    public string $company = '';

    #[Validate('nullable|string|max:100')]
    public string $jobTitle = '';

    #[Validate('nullable|in:banking,insurance,government,healthcare,ecommerce,real-estate,other')]
    public string $industry = '';

    #[Validate('required|in:demo,api-access,implementation,general')]
    public string $inquiryType = 'demo';

    #[Validate('required|string|min:10|max:5000')]
    public string $message = '';

    public bool $submitted = false;

    public ?string $error = null;

    public function submit(SubmitContactFormAction $action): void
    {
        // Rate limiting: 3 attempts per 5 minutes per IP
        if (! $this->checkRateLimit('contact-form', 3, 300)) {
            $this->error = $this->rateLimitError;

            return;
        }

        $this->validate();

        $result = $action->execute([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone ?: null,
            'company' => $this->company ?: null,
            'job_title' => $this->jobTitle ?: null,
            'industry' => $this->industry ?: null,
            'inquiry_type' => $this->inquiryType,
            'message' => $this->message,
        ], request()->ip());

        if (! $result['success']) {
            $this->error = $result['error'];

            return;
        }

        $this->submitted = true;
        $this->reset(['name', 'email', 'phone', 'company', 'jobTitle', 'industry', 'inquiryType', 'message', 'error']);

        // Dispatch browser event for tracking
        $this->dispatch('contact-form-submitted');
    }

    public function render(): View
    {
        return view('livewire.contact-form');
    }
}
