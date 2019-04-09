<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Admin extends Model
{
    use Notifiable;

    protected $fillable = [
    	'name','email','passowrd','avator','mobile','ip'
    ];

    protected $hidden = [
    	'passowrd'
    ];
}
