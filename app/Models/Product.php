<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\ModelLogTrait;

class Product extends Model
{
    use HasFactory, ModelLogTrait;

    protected $fillable = ['name', 'price'];

}
