<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FilmsGenres extends Model
{
    public function films(){
        return $this->BelongsToMany(Films::class , 'genre_film' , 'genre_id' , 'film_id');
    }
}
