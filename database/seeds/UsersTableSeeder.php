<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() > 0)
            return;

        $user = new User();
        $user->name = 'Syifandi Mulyanto';
        $user->email = 'fanfandi17@gmail.com';
        $user->email_verified_at = Carbon::now();
        $user->password = Hash::make('123456');
        $user->save();
    }
}
