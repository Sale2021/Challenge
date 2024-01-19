<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\DocteurController;
use App\Http\Controllers\DossierController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PlanningController;
use App\Http\Controllers\QuartierController;
use App\Http\Controllers\StructureController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('quartier', 'quartier')->name('quartier');
        Route::get('structure', 'structure')->name('structure');
        Route::get('patient', 'patient')->name('patient');
        Route::get('docteur', 'docteur')->name('docteur');
        Route::get('dossier', 'dossier')->name('dossier');
        Route::get('departement', 'departement')->name('departement');
        Route::get('dashboard', 'dashboard')->name('dashboard');
        Route::get('planning', 'planning')->name('planning');
    });
    Route::resource('departement', DepartementController::class)->except('index', 'create', 'show');
    Route::resource('quartier', QuartierController::class)->except('index', 'create', 'show');
    Route::resource('docteur', DocteurController::class)->except('index', 'create');
    Route::resource('patient', PatientController::class)->except('index', 'create');
    Route::resource('planning', PlanningController::class)->except('index', 'create');
    Route::resource('structure', StructureController::class)->except('index', 'create');
    Route::resource('dossier', DossierController::class)->except('index', 'create');
});

Route::controller(LinkController::class)->group(function () {
    Route::get('/pharmacie', 'pharmacie')->name('pharmacie');
    Route::get('/clinique', 'clinique')->name('clinique');
    Route::get('/chat', 'chat')->name('chat');
});
Route::view('/', 'index')->name('accueil');
Route::view('/service', 'service')->name('service');
require __DIR__.'/auth.php';
