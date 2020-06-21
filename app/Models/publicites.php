<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class publicites extends Model
{
    protected $table = "publications";
    protected $fillable = ['image', 'title','contenu'];


    public function commentaires()
    {
        return hasToMany();
    }
}
