<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NovoAcesso extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $user;

    public function __construct(User $user)
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
        return $this->view('emails.novoacesso')->with([
            'nome' => $this->user->name,
            'email' => $this->user->email,
            'datahora' => now()->setTimezone('America/Sao_Paulo')->format('d-m-y H-i-s')
        ])->attach(public_path() . '/files/teste.txt');
    }
}
