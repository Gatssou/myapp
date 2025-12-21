<?php

use App\Http\Controllers\AuthConller;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
   return view('homepage');
});
   


 Route::get('/test-session', function () {
    session(['ok' => 'ça marche']);
    return session('ok');
});

Route::view ('/projects', 'projects')->name('projects');

Route::get('/register', [AuthConller::class, 'showSignUp'])->name('register');
Route::post('/register', [AuthConller::class, 'signUp'])->name('registration.register');
Route::get('/login', [AuthConller::class, 'showFormLogin'])->name('login');
Route::post('/login', [AuthConller::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthConller::class, 'logout'])->name('logout');
Route::get('/dashboard', [AuthConller::class, 'dashboard'])->middleware('auth')->name('dashboard');


