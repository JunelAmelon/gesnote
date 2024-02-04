<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cour_Etudiant extends Model
{
    use HasFactory;



      protected $fillable = [
        'cour_id',
        'etudiant_id',
        'note1',
        'note2',
        'note3',
    ];
}
