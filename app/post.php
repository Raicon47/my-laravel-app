<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class post extends Model
{
    use  Notifiable;

    protected $fillable = [
        'title', 'body', 'cover_image'
    ];

    public function searchableAs()
    {
        return 'posts_index';
    }

     // Table Name
     protected $table = 'posts';
     // Primary Key
     public $primaryKey = 'id';
     // Timestamps
     public $timestamps = true;

    public function user(){
        return $this->belongsTo(User::class);
    }   
}
