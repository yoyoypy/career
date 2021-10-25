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
    public $branch;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($interview, $applicant, $branch)
    {
        $this->interview = $interview;
        $this->applicant = $applicant;
        $this->branch    = $branch;
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
                    'interview' => $this->interview,
                    'branch'    => $this->branch
                ])
                ->markdown('frontend.emails.interviewinvitation');
    }
}
