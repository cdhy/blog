<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Article extends Model
{
    use Notifiable;
    
    protected $fillable = [
        'title', 'subtitle', 'slug', 'keywords', 'description', 'category_id', 'cover', 'content', 'click', 'author', 'is_index', 'is_hot', 'is_recommended';
];


}
