<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemBound extends Model
{
    use HasFactory;

    protected $fillable = [
        'item',
        'qty',
        'type',
        'updated-by',
        'remarks'
    ];
}
