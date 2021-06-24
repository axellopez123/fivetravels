<?php

use Illuminate\Http\Request;
use Illuminate\Http\Request\Session;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\DestinationController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



// Session
Route::get('/session/get',[SessionController::class,'store']);//->name('session.get');
Route::get('/session/set',[SessionController::class,'storeSessionData'])->name('session.store');
Route::get('/session/remove',[SessionController::class,'deleteSessionData'])->name('session.delete');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Packages
Route::post('/packages/create',[PackageController::class,'store']);
Route::get('/packages',[PackageController::class,'showAll']);
Route::get('/packages/{id}',[PackageController::class,'show']);

//DESTINATION
Route::post('/destination/create',[DestinationController::class,'store']);
Route::get('/destination', [DestinationController::class,'show']);
Route::get('/destination/{id}', [DestinationController::class,'showOne']);

//Users
Route::post('/user/register',[AuthController::class,'register']);
Route::post('/user/login',[AuthController::class,'login']);

//REVIEWS
Route::post('/review/{user_id}/reservation/{reservation_id}',[ReviewController::class,'store']);
Route::get('/review/{id}',[ReviewController::class,'show']);

//RESERVATION
Route::post('/reservation/{user_id}/package/{pack_id}/create',[ReservationController::class,'store']);


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function(EmailVerificationRequest $request){
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
Route::get('/packages/{user_id}/buy/{pack_id}',[PackageController::class,'buy']);
Route::group(['middleware' => ['auth:sanctum']], function(){
    
    
});