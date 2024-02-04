<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CoursController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//route etudiants
Route::get('/', [EtudiantController::class, 'acceuil'])->name('acceuil');
Route::get('/home', [EtudiantController::class, 'dashboard'])->name('Etudiant_home');


//route professeur
Route::get('login/teacher', [ProfController::class, 'loginPage'])->name('login/teacher');
Route::get('noter-form/{id}', [ProfController::class, 'NotePage'])->name('NotePage');
Route::post('noter/', [ProfController::class, 'attributeNote'])->name('noter');  

// Pour les routes liées à l'enseignant (professeur)
Route::get('/professeur/dashboard', [ProfController::class, 'seeNoteAllStudents'])->name('professeur.dashboard');
Route::get('/professeur/home', [ProfController::class, 'home'])->name('professeur.home');

// Route pour la page de connexion
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login-treat',[LoginController::class, 'authenticate'])->name('signTreatment');
Route::post('login-treatment', [LoginController::class, 'authenticate'])->name('signTreat');
Route::get('/deconnexion', [LoginController::class, 'deconnexion'])->name('deconnexion');

//route Admin
Route::get('create-etudiant', [AdminController::class, 'CreateEtudiantForm'])->name('create-etudiant');
Route::get('login/form/admin', [AdminController::class, 'loginPageAdmin'])->name('loginAdmin');
Route::get('acceuil', [AdminController::class, 'acceuil'])->name('admin');

Route::post('creer-etudiant', [AdminController::class, 'SaveEtudiant'])->name('SaveEtudiant');
Route::get('create-teacher', [AdminController::class, 'CreateTeacherForm'])->name('create-teacher');
Route::post('creer-teacher', [AdminController::class, 'SaveTeacher'])->name('SaveTeacher');
Route::get('create-courses', [AdminController::class, 'CreateCoursesForm'])->name('create-courses');
Route::post('create-courses', [AdminController::class, 'SaveCours'])->name('create-coursesT');

