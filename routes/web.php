<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Database\Query\Builder;

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


// function select(string $query, array $bindings = []); or param = (array $columns = ['*'])

    // ErrorException
    // stripos() expects parameter 1 to be string, array given // select return array.
    // $users = DB::table('users')->select('select * from users where id = ?', [1])->get();

    // $users = DB::table('users')->select(['name', 'email'])->get();
    // $users = DB::select('select * from users where id = :id', ['id' => 1]);
    // $users = DB::select('select * from users where id = ?', [1]);

// function insert(string $query, array $bindings = []);

    // Illuminate\Database\QueryException
    // SQLSTATE[42S22]: Column not found: 1054 Unknown column '0' in 'field list' (SQL: insert into `users` (`0`, `1`, `2`, `3`, `4`, `5`, `6`, `7`) values (51, name, email, password, password, test, test, test))
    //$users = DB::table('users')->insert([51, 'name', 'email', 'password', 'password', 'test', 'test', 'test']);

    // $users = DB::table('users')->insert(['id' => '52', 'name' => 'name11','email' => 'email11', 'password' => 'password11']); // return true or false, id = ['number', number] - pass string number or number => ok
    // insert(string $query, array $bindings = []);
    // $users = DB::insert('insert into users value(?, ?, ?, ?, ?, ?, ?, ?)', [53, 'name1124', 'email1134', '2020-01-01 10:10:10', 'password1114', 'test', '2020-01-01 10:10:10', '2020-01-01 10:10:10']);

// function update(string $query, array $bindings = []); or param = (array $values)
    // $users = DB::update('update users set name = "Dinh Quang test" where id = 1');
    // $users = DB::update('update users set name = ?, email = ? where id = ?', ['Quang', 'quangnd.hust@gmail.com', 1]);
    // $users = DB::table('users')->where('id', '=',  1)->update(['name' => 'Quang Nguyen', 'email_verified_at' => '2020-04-03 14:42:50', 'password' => 'password', 'remember_token' => 'NULL', 'created_at' => '2020-04-03 14:42:50', 'updated_at' => '2020-04-03 14:42:50']); note here if here without where clause then update method will update all table

// function delete();
    // $users = DB::table('users')->delete(3); // delele from table users where id = 3
    // $table_name = 'users';
    // $users = DB::delete('delete from ' . $table_name . ' where id = ?', [11]);
    // $users = DB::table('users');
    // $users = DB::delete('delete from ' . $users->from . ' where id = ?', [15]);
    // $users = DB::delete('delete from users where id = ?', [13]);
    // $users = DB::delete('delete from users'); delete all users table
dd($users);
