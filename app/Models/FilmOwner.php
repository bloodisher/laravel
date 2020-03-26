<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FilmOwner extends Model
{
    public function films(){
        return $this->hasMany(Films::class);
    }
}
