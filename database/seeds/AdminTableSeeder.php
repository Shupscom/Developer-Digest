<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $admin = new Admin();
        $admin->username = 'bolaji';
        $admin->password = bcrypt('123456');
        $admin->role_id = 1;
        $admin->picture = 'img.jpg';
        $admin->save();

    }
}
