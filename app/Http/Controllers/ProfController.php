<?php
namespace App\Http\Controllers;

use App\Models\Cour;
use App\Models\CourEtudiant;
use App\Models\Etudiant;
use App\Models\Professeur;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProfController extends Controller
{
    // ...
    public function loginPage()
    {
        return view('Professeur.login');
    }
    public function home()
    {if (!Auth::user()) {
        Auth::logout();
        return redirect()->route('acceuil');
    }
        return view('Professeur.dash');
    }
    public function NotePage($id)
    {
        if (!Auth::user()) {
            Auth::logout();
            return redirect()->route('acceuil');
        }
        return view('Professeur.noter')->with('id', $id);
    }
    public function dash()
    {if (!Auth::user()) {
        Auth::logout();
        return redirect()->route('acceuil');
    }
        return view('Professeur.dash');
    }
    public function seeNoteAllStudents()
    {if (!Auth::user()) {
        Auth::logout();
        return redirect()->route('acceuil');
    }
   try {
        // Récupérer l'id du cours depuis la session du professeur connecté
        $coursId = Session::get('id_cours');

        // Récupérer les données des étudiants associés à ce cours avec leurs notes
        $etudiantsDansCours = CourEtudiant::with(['etudiant', 'cours'])
            ->where('cour_id', $coursId)
            ->get();

        // Vous pouvez passer ces données à une vue pour les afficher
        return view('Professeur.home', compact('etudiantsDansCours'));
    } catch (\Exception $e) {
        // En cas d'erreur, rediriger avec un message d'erreur
        return back()->withErrors(['error' => $e->getMessage()]);
    }



    }

    public function attributeNote(Request $request)
    {if (!Auth::user()) {
        Auth::logout();
        return redirect()->route('acceuil');
    }

        $id = $request->id; // Vous devez récupérer l'id de l'étudiant à partir de la session ou d'autres sources

        try {
            // Récupérer le cours_id à partir de la session du professeur connecté
            $cours_id = Session::get('id_cours');

            $request->validate([
                'valeur' => 'required|numeric',
                'choix_note' => 'required|in:note1,note2,note3',
            ]);

            // Récupérer l'étudiant associé à partir des paramètres de la requête
            $etudiant = Etudiant::where('id_etu', $id)->first();

            // Vérifier si l'étudiant et le cours existent
            if (!$etudiant || !$cours_id) {
                throw new \Exception('Étudiant ou cours introuvable.');
            }

            // Récupérer la note existante pour cet étudiant dans ce cours
            $existingNote = Note::where('id_etudiant', $etudiant->id)
                ->where('id_cours', $cours_id)
                ->first();

            // Si la note existante n'existe pas, créer une nouvelle note
            if (!$existingNote) {
                $note = new Note();
            } else {
                // Si la colonne spécifiée n'est pas NULL, lever une exception
                if (!is_null($existingNote->{$request->choix_note})) {
                    throw new \Exception('Une note existe déjà pour cette note pour cet étudiant dans ce cours.');
                }

                // Utiliser la note existante
                $note = $existingNote;
            }

            // Mettre à jour la colonne spécifiée avec la nouvelle valeur
            $note->{$request->choix_note} = $request->valeur;

            // Enregistrer la note pour l'étudiant
            $etudiant->notes()->save($note);

            // Enregistrer la note pour le cours
            $cours = Cour::find($cours_id);
            $cours->notes()->save($note);

            //second enregistrement dans coursEtudiant
            $etudiant2 = CourEtudiant::where('etudiant_id', $etudiant->id)->where('cour_id', $cours_id)->first();

            if ($request->choix_note == 'note1') {
                $note1 = $request->valeur;
                if ($etudiant2->note1 === null) {
                    CourEtudiant::where('etudiant_id', $etudiant->id)->where('cour_id', $cours_id)->update(['note1' => $note1]);
                }
            } elseif ($request->choix_note == 'note2') {
                $note_2 = $request->valeur;
                if ($etudiant2->note2 === null) {
                    CourEtudiant::where('etudiant_id', $etudiant->id)->where('cour_id', $cours_id)->update(['note2' => $note_2]);
                }
            } elseif ($request->choix_note == 'note3') {
                $note3 = $request->valeur;
                if ($etudiant2->note3 === null) {
                    CourEtudiant::where('etudiant_id', $etudiant->id)->where('cour_id', $cours_id)->update(['note3' => $note3]);
                }
            } else {
                throw new \Exception('Une note existe déjà pour cette note pour cet étudiant dans ce cours.');
            }

            // Vous pouvez ajouter un message de succès ici si nécessaire
            return redirect()->back()->with('success', 'Note ajoutée avec succès.');

        } catch (\Exception $e) {
            // En cas d'erreur, rediriger avec un message d'erreur
            return redirect()->back()->with('error', $e->getMessage())->withInput();
        }

    }

}
