<?php

namespace App\Models;

use App\Models\Matiere;
use App\Models\Apprenant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory;

    public function apprenant()
    {

        return $this->belongsTo(Apprenant::class);
    }

    public function matiere()
    {

        return $this->belongsTo(Matiere::class);
    }
}
