<?php
namespace App\Models;
use App\Models\Etudiant;
use App\Models\Cour;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = 'notes';
     protected $fillable = ['note1', 'note2', 'note3', 'id_etudiant', 'id_cours'];


    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'id_etudiant');
    }
    

    public function cours()
    {
        return $this->belongsTo(Cour::class, 'id_cours');
    }

    
}
