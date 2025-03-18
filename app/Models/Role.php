<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function members()
    {
        return $this->hasMany(BoardMember::class);
    }
}
