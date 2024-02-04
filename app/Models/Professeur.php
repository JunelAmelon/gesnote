<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    protected $table = 'professeurs';
     protected $fillable = ['id','id_prof','password','nom','prenom','sexe','date_naissance','lieu_naissance'];


    public function cours()
    {
        return $this->hasMany(Cour::class, 'id_professeur');
    }

  public function etudiants()
    {
        return $this->hasManyThrough(Etudiant::class, Cour::class, 'id_professeur', 'id', 'id', 'id_etudiant')
            ->with(['notes' => function ($query) {
                $query->where('id_cours', null); // Filtrer uniquement les notes du professeur
            }]);
    }

}
