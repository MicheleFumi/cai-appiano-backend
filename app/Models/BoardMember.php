<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BoardMember extends Model
{


    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
