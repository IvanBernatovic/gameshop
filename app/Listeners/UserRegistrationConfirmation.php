<?php

namespace App\Listeners;

use App\Events\UserIsRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserRegistrationConfirmation
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
     * @param  UserIsRegistrered  $event
     * @return void
     */
    public function handle(UserIsRegistered $event)
    {
        Mail::send('emails.confirm-registration', ['user' => $event->user], function ($m) use ($user) {
            $m->to($event->user->email, $event->user->name)->subject('Gameshop - Confirm registration');
        });
    }
}
