<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@yukfutsal.id';
        $user->password = bcrypt('adminfutsal123');
        $user->role = 'admin';
        $user->save();
    }
}
