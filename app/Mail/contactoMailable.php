<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;

class contactoMailable extends Mailable
{
    use Queueable, SerializesModels;

    public array $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('cdestefano5@gmail.com', $this->data['nombre']),
            replyTo: [
                new Address($this->data['correo'], $this->data['nombre'])
            ],
            subject: $this->data['asunto'],
    );
    }

    public function content(): Content
    {
        return new Content(
            view: 'post.postEmail',
            with: [
                'nombre'  => $this->data['nombre'],
                'correo'  => $this->data['correo'],
                'asunto'  => $this->data['asunto'],
                'mensaje' => $this->data['mensaje'],
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
