<?php
namespace App\Models;
use App\Models\Cour;
use App\Models\Note;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $table = 'etudiants';
 protected $fillable = ['id', 'id_etu', 'password', 'nom', 'prenom', 'sexe', 'date_naissance', 'lieu_naissance', 'classe'];

   
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
  

   public function notes()
    {
        return $this->hasMany(Note::class, 'id_etudiant');
    }

    public function cours()
    {
        return $this->belongsToMany(Cour::class, 'cours_etudiant', 'id_etudiant', 'id_cours')
            ->withPivot(['note1', 'note2', 'note3'])
            ->withTimestamps();
    }
     public function coursEtudiants() {
        return $this->hasMany(CourEtudiant::class, 'etudiant_id');
    }

    
}
