<?php

namespace App\Http\Traits;

use App\Models\ModelLog;

trait ModelLogTrait
{

    protected static $events = ['creating', 'created', 'updating', 'updated', 'deleting', 'deleted', 'saving', 'saved'];


    public static function bootModelLogTrait()
    {

        foreach (static::$events as $event) {
            static::$event(function ($model) use ($event) {
                ModelLog::create([
                    'model' => get_class($model),
                    'action' => $event,
                    'data' => json_encode($model),
                ]);
            });
        }
        // static::created(function ($model) {
        //     // Log who created this model
        //     Log::info('Token for ' . class_basename($model) . ' created by ');
        // });
    }
}
