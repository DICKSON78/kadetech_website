<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Throwable;

class ContactController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'service' => ['required', 'in:web,ai,camera,mixed,other'],
            'message' => ['required', 'string', 'min:20', 'max:5000'],
            'website' => ['nullable', 'max:0'],
        ]);

        $validated['phone'] = $validated['phone'] ?? null;
        $validated['website'] = $validated['website'] ?? null;
        $validated['service_label'] = match ($validated['service']) {
            'web' => 'Website or platform',
            'ai' => 'AI or automation',
            'camera' => 'Camera or security',
            'mixed' => 'Combined solution',
            default => 'Something else',
        };

        try {
            Mail::to('kadetech.online@gmail.com')->send(new ContactMessage($validated));
        } catch (Throwable $exception) {
            report($exception);

            return back()
                ->withInput()
                ->withErrors(['mail' => 'We could not send your message right now. Please email us directly.']);
        }

        return redirect()
            ->route('contact')
            ->with('contact_success', 'Thanks for reaching out. KADETECH will get back to you soon.');
    }
}
