<?php

namespace App\Models;

use App\Models\Apprenant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class classe extends Model
{
    use HasFactory;

    public function apprenants()
    {

        return $this->hasMany(Apprenant::class);
    }
}
