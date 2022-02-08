<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{
    use HasFactory;
    
    protected $fillable = ['post_id', 'images'];
    
    // hacemosl a relacion de uno a uno 
    // en la cual en un post sol habra ima iamgen.--
    // o qur una imagen solo pertenece a un post


    // una imagen va a pertenecer a un post.....
    public function post(){
         return $this->belongsTo(Post::class);
    }
      
}
