<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oder_status extends Model
{
    use HasFactory;

    protected $table = 'order_status';

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
