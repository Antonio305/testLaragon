<?php

namespace App\Models;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'url_clean', 'content', 'posted', 'category_id'];

    // haremos la herencia de datosS

    // en la sera una relacion de uno a muchos

    // donde en una categoria puede haber muchos Post.
    // una categoria de celurar puede tener nuchas posts o comentarios

    // crearemos una funciuo   para la herencia

    public function category(){
        return $this->belongsTo(Categorie::class);
    }


     // haremos otra relacion de uno a uno.

    //  donde cada post hay una sola  iamgen
    


      // un post contiene una imagen...
    public function image(){
        // haremos la relacion de uno a uno.
       return  $this->hasOne(PostImage::class);
    }



}
