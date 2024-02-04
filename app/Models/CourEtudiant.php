<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourEtudiant extends Model
{
    use HasFactory;

     protected $fillable = ['cour_id', 'etudiant_id', 'note1', 'note2', 'note3'];
      public function notes2()
    {
        return $this->hasMany(Note::class, 'etudiant_id');
    }
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'etudiant_id');
    }

    public function cours()
    {
        return $this->belongsTo(Cour::class, 'cour_id');
    }
    

}
