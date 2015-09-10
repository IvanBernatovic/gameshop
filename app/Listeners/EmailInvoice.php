<?php

namespace App\Listeners;

use App\Events\OrderWasPlaced;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class EmailInvoice
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
     * @param  OrderWasPlaced  $event
     * @return void
     */
    public function handle(OrderWasPlaced $event)
    {
        foreach ($order->products as $orderItem) {
            $orderItem->product->quantity -= $orderItem->quantity;
            $orderItem->product->save();
        }

        Mail::send('emails.order-invoice', ['order' => $event->order], function ($m) use ($order) {
            $m->to($event->order->user->email, $event->order->user->name)->subject('Gameshop - Order information');
        });
    }
}
