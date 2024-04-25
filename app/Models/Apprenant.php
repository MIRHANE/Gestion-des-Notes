<?php

namespace App\Models;

use App\Models\Note;
use App\Models\classe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Apprenant extends Model
{
    use HasFactory;

    public function classe()
    {

        return $this->belongsTo(classe::class);
    }

    public function notes()
    {

        return $this->hasMany(Note::class);
    }
}
