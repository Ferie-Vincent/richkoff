<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormSubmissionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;

    /**
     * Crée une nouvelle instance de message.
     *
     * @return void
     */
    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    /**
     * Construire le message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@richkoff.com')
                    ->subject('Nouveau formulaire soumis')
                    ->view('emails.form_submission')
                    ->with('formData', $this->formData);
    }
}
