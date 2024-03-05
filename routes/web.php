<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ListingController::class, 'index']);

Route::get('/listings/{listing}', [ListingController::class, 'show']);


//* Common Resource Routes:
//? 1. index - show all
//? 2. show - show single
//? 3. create - show form to create
//? 4. store - store
//? 5. edit - show form to edit
//? 6. update - update
//? 7. destroy - delete