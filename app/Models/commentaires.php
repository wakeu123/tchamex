<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class commentaires extends Model
{
    protected $table = "commentaires";
    protected $fillable = ['contenu'];


    public function publication()
    {
        return BelongTo();
    }
}
