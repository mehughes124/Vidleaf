<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\SectionOrderController;
use App\Livewire\UserSections;
use App\Livewire\SectionBuilder;
use App\Livewire\Sections; 
use Illuminate\Support\Facades\Route;
use App\Models\Waitlist; 
use Illuminate\Http\Request;


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

Route::get('/', function () {
    return view('linkberree-lp');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/join-waitlist', function (Request $request) {
    $request->validate(['email' => 'required|email']);
    Waitlist::create($request->only('email'));
    return response()->json(['message' => 'Thank you for joining the waitlist!']);
});

// Route::get('/sections', [SectionsController::class, 'index'])->middleware(['auth'])->name('sections');

// Route::get('/sections', function () {
//     return view('sections');
// })->middleware(['auth', 'verified'])->name('sections');

Route::get('/sections', Sections::class)->middleware(['auth', 'verified'])->name('sections');



Route::get('/section-builder', SectionBuilder::class)->middleware('auth');

Route::post('/update-section-order', [SectionOrderController::class, 'updateSectionOrder']);

Route::get('/my-sections', UserSections::class)->middleware('auth');

require __DIR__.'/auth.php';
