<?php

namespace App\Listeners;

use App\Events\MensagemRegistro;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class BoasVindasEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  MensagemRegistro  $event
     * @return void
     */
    public function handle(MensagemRegistro $event)
    {
        //
    }
}
