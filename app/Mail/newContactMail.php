<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Person;

class newContactMail extends Mailable
{
    
    use Queueable, SerializesModels;

    private $person;

    /**
     * Create a new message instance.
     * @param  \App\Models\Person $person
     * @return void
     */
    public function __construct(Person $person)
    {
       $this->person = $person;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('view.name');
        //$this->subject('Segundo teste de Email');
        //$this->to($this->person->getName());
        //return $this->view('mail.newContactMail');

        return $this
          ->subject('Welcome to ProjetoTeste')
          ->to($this->person->getEmail())
          ->markdown('mail.newContactMail', [
          'name' => $this->person->getName(),
          'lastName' => $this->person->getLastName(),
          'all' => $this->person->all()
        ]);
            
    }
}
