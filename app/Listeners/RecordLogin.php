<?php

namespace App\Listeners;

use App\Events\UserLogged;
use Auth;
use Carbon\Carbon;

class RecordLogin
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
     * @return void
     */
    public function handle(UserLogged $event)
    {
        $event->user = Auth::user();
        $event->user->last_login = $event->user->current_login ? $event->user->current_login : Carbon::now();
        $event->user->current_login = Carbon::now();
        $event->user->save();
    }
}
