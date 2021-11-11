<?php

namespace App\Observers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class OrderObserver
{
    /**
     * Handle the Order "created" event.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function created(Order $order)
    {
        $order->user->update(['order_count' => $order->user->order_count + 1]);
    }

    // /**
    //  * Handle the Order "updated" event.
    //  *
    //  * @param  \App\Models\Order  $order
    //  * @return void
    //  */
    // public function updated(Order $order)
    // {
    //     //
    // }

    // /**
    //  * Handle the Order "deleted" event.
    //  *
    //  * @param  \App\Models\Order  $order
    //  * @return void
    //  */
    // public function deleted(Order $order)
    // {
    //     //
    // }

    // /**
    //  * Handle the Order "restored" event.
    //  *
    //  * @param  \App\Models\Order  $order
    //  * @return void
    //  */
    // public function restored(Order $order)
    // {
    //     //
    // }

    // /**
    //  * Handle the Order "force deleted" event.
    //  *
    //  * @param  \App\Models\Order  $order
    //  * @return void
    //  */
    // public function forceDeleted(Order $order)
    // {
    //     //
    // }
}
