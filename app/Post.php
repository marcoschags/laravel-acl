<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Relacionamento de MUITOS para UM
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
