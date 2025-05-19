<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Hasfactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    //
    use Hasfactory;
    protected $table = 'logos';
    protected $fillable = [
        'title',
        'image'
    ];
}
