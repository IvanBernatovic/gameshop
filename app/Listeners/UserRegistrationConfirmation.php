<?php

namespace App\Listeners;

use App\Events\UserIsRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

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
        $user = $event->user;
        Mail::send('emails.confirm-registration', ['user' => $user], function ($m) use ($user) {
            $m->from('gameshop.zavrsni.rad@gmail.com', 'Gameshop - Activate account');
            $m->to($user->email, $user->name)->subject('Gameshop - Confirm registration');
        });
    }
}
