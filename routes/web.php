<?php

use App\Http\Controllers\{
    PokemonController,
    ProfileController,
    Admin\PokemonController as AdminPokemonController,
    Admin\AttackPokemonController as AttackPokemonController,
    Admin\AttackController as AdminAttackController,
    AttackController
};

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [PokemonController::class, 'index'])->name('pokemon.home');

Route::middleware(['auth'])->group(function () {
    Route::resource('/admin/pokemon', AdminPokemonController::class)->except('show');
    Route::get('/admin/pokemon/search', [AdminPokemonController::class, 'search'])->name('adminpokemon.search');
    Route::get('admin/pokemon/editimg/{pokemon}', [AdminPokemonController::class, 'edit_image'])->name('edit.pokemon.image');
    Route::post('admin/pokemon/{pokemon}/editimg', [AdminPokemonController::class, 'update_image'])->name('update.pokemon.image');
    Route::resource('admin/attackpokemon', AttackPokemonController::class)->except('index', 'show', 'create');
    //need a parameter to the url of create
    Route::get('admin/attackpokemon/create/{pokemon}', [AttackPokemonController::class, 'create'])->name('attackpokemon.create');
    Route::get('/admin/attackpokemon/search', [AttackPokemonController::class, 'search'])->name('attackpokemon.search');
    Route::resource('admin/attack', AdminAttackController::class)->except('show');
    Route::get('admin/attack/search', [AdminAttackController::class, 'search'])->name('adminattack.search');
});

Route::get('/pokemon/search', [PokemonController::class, 'search'])->name('pokemon.search');
Route::get('/pokemon/{id}', [PokemonController::class, 'show'])->name('pokemon.show');

Route::get('/attack', [AttackController::class, 'index'])->name('front.attack.index');
Route::get('attack/search', [AttackController::class, 'search'])->name('front.attack.search');

Route::get('/admin', function () {
    return Inertia::render('Admin/index');
})->middleware(['auth', 'verified'])->name('admin');





Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
