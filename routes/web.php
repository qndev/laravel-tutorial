<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $user = DB::table('users')->get();
    return view('welcome', ['users' => $user]);
});

// ErrorException
// stripos() expects parameter 1 to be string, array given // select return array.
// $users = DB::table('users')->select('select * from users where id = ?', [1])->get();

// Illuminate\Database\QueryException
// SQLSTATE[42S22]: Column not found: 1054 Unknown column '0' in 'field list' (SQL: insert into `users` (`0`, `1`, `2`, `3`, `4`, `5`, `6`, `7`) values (51, name, email, password, password, test, test, test))
//$users = DB::table('users')->insert([51, 'name', 'email', 'password', 'password', 'test', 'test', 'test']);

//Success
// $users = DB::table('users')->select(['name', 'email'])->get();
// $users = DB::select('select * from users where id = :id', ['id' => 1]);
$users = DB::table('users')->insert(['id' => '52', 'name' => 'name11', 'email' => 'email11', 'password' => 'password11']); /// return true or false
dd($users);
