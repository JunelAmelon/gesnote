<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cour;
use App\Models\Etudiant;
use App\Models\Professeur;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //

    public function showLoginForm()
    {
        return view('Etudiant.login');
    }
     public function authenticate(Request $request): RedirectResponse | View
    {
        // Validation des informations de connexion
        $credentials = $request->validate([
            'id_user' => ['required'],
            'password' => ['required'],
        ]);

        // Tentative d'authentification avec les informations fournies
        if (Auth::attempt($credentials)) {
            // Régénération de la session pour des raisons de sécurité
            $request->session()->regenerate();

            // Récupération de l'utilisateur authentifié
            $user = Auth::user();
            $id_user= $user->id_user;
            Session::put('id_utilisateur', $id_user);
            
            // Vérification du statut de l'utilisateur pour rediriger en conséquence
            if ($user->role == 'etudiant') {
                // Redirection vers la page d'accueil de l'étudiant
               $user = Auth::user();
                $id_user = $user->id_user;
                $etudiant= Etudiant::where('id_etu', $id_user )->first();
                Session::put('prenom', $etudiant->prenom);
                Session::put('classe', $etudiant->classe);


                return redirect()->route('Etudiant_home')->with('success', 'Connexion réussie en tant qu\'étudiant.');
            } elseif ($user->role === 'admin') {
                // Redirection vers la page d'accueil de l'administrateur
                return redirect()->route('admin')->with('success', 'Connexion réussie en tant qu\'administrateur.');
            } elseif ($user->role === 'professeur') {
                $user = Auth::user();
                $id_user = $user->id_user;
                // Redirection vers la page d'accueil du professeur
                $cours= Cour::where('id_professeur', $id_user )->first();
                $id_cours= $cours->id;
                $prof= Professeur::find($id_user);
                Session::put('cours', $cours->nom_cours);
                Session::put('id_cours', $id_cours);
                Session::put('prenomprof', $prof->prenom);
                return redirect()->route('professeur.dashboard')->with('success', 'Connexion réussie en tant que professeur.');
            } else {
                // Redirection par défaut si le type d'utilisateur n'est pas géré
           

                return redirect()->route('acceuil')->with('success', 'Type d\'utilisateur non pris en compte');
            }
        }

        // Redirection en arrière avec des erreurs si l'authentification échoue
        return back()
            ->withErrors([
                'id_user' => 'Les informations d\'identification fournies ne correspondent à aucun enregistrement.',
            ]);
           
    }


    public function deconnexion(){
        if(Auth::user()){
            Auth::logout();
        }
        return redirect()->route('acceuil');
    }
}
