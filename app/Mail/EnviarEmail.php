<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EnviarMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Armazena os campos que serão enviados.
     */
    protected $inputs;

    /**
     * Cria uma nova instância e
     * armazena os valores dos campos
     * a serem enviados.
     */
    public function __construct(array $inputs)
    {
        $this->inputs = $inputs;
    }

    /**
     * Constrói o e-mail a ser enviado.

     */
    public function build()
    {
        /**
         * Utiliza uma view qualquer definida,
         * e atribui a ela os valores
         * a serem enviados por email.
         *
         **/
        return $this->view('dados.create')
            ->with(['nome' => $this->inputs,
                'email' => $this->inputs,
                'telefone' => $this->inputs,
                'endereco' => $this->inputs
            ]);
    }
}
