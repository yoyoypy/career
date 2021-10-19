<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InterviewInvitation extends Mailable
{
    use Queueable, SerializesModels;

    public $interview;
    public $applicant;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($interview, $applicant)
    {
        $this->interview = $interview;
        $this->applicant = $applicant;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->cc('recruitment@sadhanas.co.id')
                ->replyTo('recruitment@sadhanas.co.id')
                ->attach('assets/doc/FormDataPribadiPelamar.docx')
                ->with([
                    'applicant' => $this->applicant,
                    'interview' => $this->interview
                ])
                ->markdown('frontend.emails.interviewinvitation');
    }
}
