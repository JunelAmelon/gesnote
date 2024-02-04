<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class EtudiantController extends Controller
{
    //
    public function acceuil()
    {
        return view('Etudiant.index');
    }
    public function dashboard()
    {if (!Auth::user()) {
    Auth::logout();
    return redirect()->route('acceuil');
}

        try {
            // Récupérer l'étudiant authentifié
            $userId = Session::get('id_utilisateur');
            $etudiant = Etudiant::where('id_etu', $userId)->first();

            // Vérifier si l'étudiant existe
            if (!$etudiant) {
                return back()->withErrors(['error' => 'Étudiant introuvable.']);
            }

            // Charger les notes liées à l'étudiant avec les informations sur les cours et les professeurs
            $notes = $etudiant->notes()->with(['cours.professeur'])->get();

            return view('Etudiant.home', compact('notes'));
        } catch (\Exception $e) {
            // En cas d'erreur, rediriger avec un message d'erreur
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

}
