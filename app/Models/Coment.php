<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Coment extends Model
{
    use Notifiable;
    protected $fillable = [
        'uid',
        'aid',
        'content',
        'status',
        'ip'
    ];
}
