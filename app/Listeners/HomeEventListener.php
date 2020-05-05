<?php

namespace App\Listeners;

use App\Event\HomeEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class HomeEventListener
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
     * @param  HomeEvent  $event
     * @return void
     */
    public function handle(HomeEvent $event)
    {
        info("Entrou no Home");
        info($event->text);
    }
}