<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripeController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::controller(StripeController::class)->group(function(){
    Route::post('stripe', 'stripe')->name('stripe');
    Route::get('success', 'success')->name ('success');
    Route::get('cancel', 'cancel')->name('cancel');
});