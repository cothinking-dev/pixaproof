<?php

namespace App\Actions;

use App\Mail\ContactFormSubmission;
use App\Models\Lead;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SubmitContactFormAction
{
    public function execute(array $data, ?string $ipAddress = null): array
    {
        try {
            // Create lead record
            $lead = Lead::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'company' => $data['company'],
                'job_title' => $data['job_title'] ?? null,
                'industry' => $data['industry'] ?? null,
                'inquiry_type' => $data['inquiry_type'] ?? 'general',
                'message' => $data['message'],
                'source' => 'contact-form',
                'ip_address' => $ipAddress,
            ]);

            // Send email notification to admin
            $notifyEmail = config('mail.contact_notify', config('mail.from.address'));

            if ($notifyEmail) {
                Mail::to($notifyEmail)->queue(new ContactFormSubmission($lead));
            }

            return ['success' => true, 'lead' => $lead];
        } catch (\Exception $e) {
            Log::error('Contact form submission failed', [
                'error' => $e->getMessage(),
                'data' => $data,
            ]);

            return [
                'success' => false,
                'error' => 'Something went wrong. Please try again later.',
            ];
        }
    }
}
