<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AccountActivationEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(protected User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.account-activation')
                    ->with([
                        'username' => ucwords($this->user->first_name . ' ' . $this->user->last_name),
                        'activationUrl' => route('auth.activate', ['user' => $this->user, 'token' => $this->user->verification_token])
                    ]);
    }
}
