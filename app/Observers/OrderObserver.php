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

        $user = User::where('id', $order->user_id)->first();
        $user->order_count++;
        $user->update();
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
