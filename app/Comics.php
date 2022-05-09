<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comics extends Model
{
    //
    protected $fillable = [
        'name',
        'poster',
        'series',
        'price',
        'description',
        'sale_date',
        'volume',
        'page_count',
        'rated',
        'updated_at',
        'created_at',
    ];
}
