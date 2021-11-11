<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\ModelLogTrait;


class Order extends Model
{
    use HasFactory, ModelLogTrait;

    // public static function boot()
    // {
    //     // static::created(function ($model) {
    //     //     $model = $model->getData($model);
    //     // });
    // }

    protected $fillable = ['value', 'status', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
