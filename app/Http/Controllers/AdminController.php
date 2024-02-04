<?php

namespace App\Http\Controllers;

use App\Models\Cour;
use App\Models\Etudiant;
use App\Models\CourEtudiant;
use App\Models\Professeur;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //Enregistrement des étudiants, des enseignants et des cours par un admin.
    public function loginPageAdmin()
    {

        return view('Admin.login');
    }

    public function acceuil()
    {if (!Auth::user()) {
        Auth::logout();
        return redirect()->route('acceuil');
    }

        return view('Admin.home');
    }
    public function CreateEtudiantForm()
    {if (!Auth::user()) {
        Auth::logout();
        return redirect()->route('acceuil');
    }

        return view('Admin.create_etudiant');
    }
    public function CreateTeacherForm()
    {if (!Auth::user()) {
        Auth::logout();
        return redirect()->route('acceuil');
    }

        return view('Admin.create_teacher');

    }
    public function CreateCoursesForm()
    {if (!Auth::user()) {
        Auth::logout();
        return redirect()->route('acceuil');
    }

        return view('Admin.create_courses');
    }

public function saveEtudiant(Request $request)
{
    if (!Auth::user()) {
        Auth::logout();
        return redirect()->route('acceuil');
    }

    // Validation des données du formulaire
    $request->validate([
        'id_etu' => 'required',
        'password' => 'required',
        'nom' => 'required|string',
        'prenom' => 'required|string',
        'sexe' => 'required|string',
        'date_naissance' => 'required|string',
        'lieu_naissance' => 'required|string',
        'classe' => 'required|string',
    ]);

    // Création d'un nouvel utilisateur
    $user = new User([
        'id_user' => $request->id_etu,
        'password' => bcrypt($request->password),
        'role' => 'etudiant',
    ]);
    $user->save();

    // Création d'un nouvel étudiant
    $etudiant = new Etudiant([
        'id' => $request->id_etu,
        'id_etu' => $request->id_etu,
        'password' => bcrypt($request->password),
        'nom' => $request->nom,
        'prenom' => $request->prenom,
        'sexe' => $request->sexe,
        'date_naissance' => $request->date_naissance,
        'lieu_naissance' => $request->lieu_naissance,
        'classe' => $request->classe,
    ]);
    $etudiant->save();

    // Récupérer tous les cours existants
    $cours = Cour::all();

    // Remplir la table CourEtudiant pour chaque cours
    foreach ($cours as $cour) {
        $courEtudiant = new CourEtudiant([
            'cour_id' => $cour->id,
            'etudiant_id' => $etudiant->id_etu,
            'note1' => null,
            'note2' => null,
            'note3' => null,
        ]);
        $courEtudiant->save();
    }

    // Vérifier si l'étudiant a été enregistré avec succès
    if ($etudiant->save()) {
        // Message de succès
        return redirect()->route('create-etudiant')->with('success', 'Étudiant enregistré avec succès.');
    } else {
        // Message d'erreur en cas d'échec
        return redirect()->route('create-etudiant')->with('error', 'Une erreur s\'est produite lors de l\'enregistrement de l\'étudiant.');
    }
}


    public function saveTeacher(Request $request)
    {if (!Auth::user()) {
        Auth::logout();
        return redirect()->route('acceuil');
    }

        // Validation des données du formulaire
        $request->validate([
            'id_prof' => 'required|unique:professeurs',
            'password' => 'required',
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'sexe' => 'required|string',
            'date_naissance' => 'required|string',
            'lieu_naissance' => 'required|string',
        ]);

        // Désactiver les contraintes de clé étrangère
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // Création d'un nouvel utilisateur
        $user = new User([
            'id_user' => $request->id_prof,
            'password' => bcrypt($request->password),
            'role' => 'professeur',
        ]);
        $user->save();

        // Création d'un nouveau professeur
        $professeur = new Professeur([
            'id' => $request->id_prof,
            'id_prof' => $request->id_prof,
            'password' => bcrypt($request->password),
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'sexe' => $request->sexe,
            'date_naissance' => $request->date_naissance,
            'lieu_naissance' => $request->lieu_naissance,
        ]);
        $professeur->save();
        if ($professeur->save()) {
            // Message de succès
            return redirect()->route('create-teacher')->with('success', 'Professeur enregistré avec succès.');

        } else {
            // Message d'erreur en cas d'échec
            return redirect()->route('create-teacher')->with('error', 'Une erreur s\'est produite lors de l\'enregistrement du professeur.');
        }
    }

    public function saveCours(Request $request)
    {if (!Auth::user()) {
        Auth::logout();
        return redirect()->route('acceuil');
    }
        $request->validate([
            'nom_cours' => 'required|string',
            'id_professeur' => 'required|exists:professeurs,id_prof',
        ]);

        try {

            // Récupération de tous les étudiants
            $etudiants = Etudiant::all();

            // Parcourir tous les étudiants et créer une entrée dans la table de liaison
            foreach ($etudiants as $etudiant) {
                // $cours->etudiants()->attach($etudiant->id, ['nom_cours' => $request->nom_cours]);

                // Création d'un nouveau cours

                $cours = new Cour([
                    'nom_cours' => $request->nom_cours,
                    'id_etudiant' => $etudiant->id,
                    'id_professeur' => $request->id_professeur,
                ]);
                $cours->save();
            }

            // Message de succès
            return redirect()->route('create-courses')->with('success', 'Cours enregistré avec succès.');

        } catch (\Exception $e) {
            // Message d'erreur en cas d'échec
            return redirect()->route('create-courses')->with('error', $e->getMessage());
        }
    }

}
