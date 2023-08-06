<?php

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

Route::post('/join-waitlist', function (Request $request) {
    $request->validate(['email' => 'required|email']);
    Waitlist::create($request->only('email'));
    return response()->json(['message' => 'Thank you for joining the waitlist!']);
});