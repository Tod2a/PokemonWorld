<?php

use App\Http\Controllers\{
    PokemonController,
    ProfileController,
    Admin\PokemonController as AdminPokemonController,
    Admin\AttackPokemonController as AttackPokemonController,
    Admin\AttackController as AdminAttackController,
    AttackController,
    Admin\AdminController,
    Admin\EvolutionController,
    MapController,
};
use App\Models\Evolution;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [PokemonController::class, 'index'])->name('pokemon.home');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::resource('/pokemon', AdminPokemonController::class)->except('show');
    Route::get('/pokemon/search', [AdminPokemonController::class, 'search'])->name('adminpokemon.search');
    Route::get('/pokemon/editimg/{pokemon}', [AdminPokemonController::class, 'edit_image'])->name('edit.pokemon.image');
    Route::post('/pokemon/{pokemon}/editimg', [AdminPokemonController::class, 'update_image'])->name('update.pokemon.image');
    Route::resource('/attackpokemon', AttackPokemonController::class)->except('index', 'show', 'create');
    //need a parameter to the url of create
    Route::get('/attackpokemon/create/{pokemon}', [AttackPokemonController::class, 'create'])->name('attackpokemon.create');
    Route::get('/attackpokemon/search', [AttackPokemonController::class, 'search'])->name('attackpokemon.search');
    Route::resource('/attack', AdminAttackController::class)->except('show');
    Route::get('/attack/search', [AdminAttackController::class, 'search'])->name('adminattack.search');
    Route::resource('/evolution', EvolutionController::class)->except('index', 'show', 'create');
    //need a parameter too
    Route::get('evolution/create/{pokemon}', [EvolutionController::class, 'create'])->name('evolution.create');
    Route::get('evolution/search', [EvolutionController::class, 'search'])->name('evolution.search');
});

Route::get('/pokemon/search', [PokemonController::class, 'search'])->name('pokemon.search');
Route::get('/pokemon/{id}', [PokemonController::class, 'show'])->name('pokemon.show');

Route::get('/attack', [AttackController::class, 'index'])->name('front.attack.index');
Route::get('attack/search', [AttackController::class, 'search'])->name('front.attack.search');

Route::get('/map', [MapController::class, 'index'])->name('front.map.index');
Route::get('/map/search', [MapController::class, 'search'])->name('front.map.search');
Route::get('/map/{id}', [MapController::class, 'show'])->name('front.map.show');




Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
