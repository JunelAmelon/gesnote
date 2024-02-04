<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Etudiant;
use App\Models\Professeur;
use App\Models\Note;

class Cour extends Model
{
    protected $table = 'cours';
     protected $fillable = ['nom_cours', 'id_etudiant', 'id_professeur'];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'id_etudiant');
    }
 
    //  public function etudiants()
    // {
    //     return $this->belongsToMany(Etudiant::class)
    //         ->withPivot(['note1', 'note2', 'note3'])
    //         ->withTimestamps();
    // }
     public function professeur()
    {
        return $this->belongsTo(Professeur::class, 'id_professeur');
    }

    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class, 'cours_etudiant', 'id_cours', 'id_etudiant')
            ->withPivot(['note1', 'note2', 'note3'])
            ->withTimestamps();
    }
public function coursEtudiants() {
        return $this->hasMany(CourEtudiant::class, 'cour_id');
    }

 
    public function notes()
    {
        return $this->hasMany(Note::class, 'id_cours');
    }
   


  
     public function notesChoix1()
    {
        return $this->hasMany(Note::class)->where('choix_note', 'choix1');
    }

    public function notesChoix2()
    {
        return $this->hasMany(Note::class)->where('choix_note', 'choix2');
    }

    public function notesChoix3()
    {
        return $this->hasMany(Note::class)->where('choix_note', 'choix3');
    }
}
