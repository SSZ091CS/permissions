<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
class UserTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $input= [
            'name'=>'Admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('123456'),
        ];
        $user = User::create($input);
        $user->assignRole('admin');
    }
}
