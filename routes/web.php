<?php
use App\Http\Controllers\{CardController};
use Illuminate\Support\Facades\Route;
Route::get('/token', function () {
    return response()->json(["token"=>csrf_token()]);
});


Route::post('/card', [CardController::class, "store"])->name("card.store");
Route::put('/card/{id}', [CardController::class, "update"])->name("card.update");
Route::get('/card/delete/{id}', [CardController::class, "delete"])->name("card.delete");
Route::get('/card/{id}', [CardController::class, "show"])->name("card.show");
Route::get('/', [CardController::class, "index"])->name("card.index");
