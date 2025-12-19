 <!-- 2eme méthode pour les routes avec le wiew  Route::view('/projects','projects') pour retourner les vues avec moins de code change le get en view -->

<?php

use App\Http\Controllers\AuthConller;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
   return view('homepage');
});
   


 

Route::view ('/projects', 'projects')->name('projects');

Route::get('/register', [AuthConller::class, 'showSignUp'])->name('register');
Route::post('/register', [AuthConller::class, 'SignUp'])->name('registration.register');
Route::get('/login', [AuthConller::class, 'showFormLogin'])->name('login');
Route::post('/login', [AuthConller::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthConller::class, 'logout'])->name('logout');
Route::get('/dashboard', [AuthConller::class, 'dashboard'])->middleware('auth')->name('dashboard');


