<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\HomeController;
use App\Models\user;
use App\Http\Middleware\Kernel;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/login', [HomeController::class, 'login']);
Route::get('/forgotpswd', [HomeController::class, 'forgotpswd']);
Route::get('candidatelist', [HomeController::class, 'get_candidates']);
Route::post('add_candidate', [HomeController::class, 'add_candidates']);
Route::post('add_question', [HomeController::class, 'add_questions']);
Route::get('view_question', [HomeController::class, 'view_questions']);
Route::post('add_interview', [HomeController::class, 'add_interviews']);
Route::get('view_interview', [HomeController::class, 'view_interviews']);
Route::get('/view_profile/{id}', [HomeController::class, 'view_profiles']);

Route::get('addcandidate', function () {
    return view('adminpanel.addcandidate');
}); 
Route::get('addquestion', function () {
    return view('adminpanel.addquestion');
}); 
Route::get('addinterview', function () {
    return view('adminpanel.addinterview');
}); 
Route::get('profile', function () {
    return view('adminpanel.candidate_profile')->with(['data'=>$query]);
});




















