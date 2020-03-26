<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Films extends Model
{
    public function films_genres(){
        return $this->BelongsToMany(FilmsGenres::class ,  'genre_film' , 'genre_id' , 'film_id');
    }
    public function film_owner(){
        return $this->BelongsTo(FilmOwner::class);
    }
}
