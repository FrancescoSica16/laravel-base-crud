<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fumetto extends Model
{
    // ???????????????????
    protected $table = "fumetti";  

    protected $fillable = ['title','description','author','url'];
}
