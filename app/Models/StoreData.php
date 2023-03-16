<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreData extends Model
{
    use HasFactory;

    protected $table = 'store_data';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
    ];
}
