<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Tag extends Model
{
    use Notifiable;
    protected $fillable = [
        'name',
        'desc',
        'image',
        'desc'
    ];
}
