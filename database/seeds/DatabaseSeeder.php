<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        for ($i = 0; $i < 25; $i++) {
            DB::table('users')->insert([
                'name' => Str::random(5),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('password'),
                'created_at' => Carbon::now()
            ]);
        }
    }
}
