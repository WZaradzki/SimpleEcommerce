<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Http\Traits\ModelLogTrait;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, ModelLogTrait;

    // public static function boot()
    // {
    //     static::created(function ($model) {
    //         $model = $model->getData($model);
    //     });
    // }

    protected $fillable = [
        'email', 'order_count'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
