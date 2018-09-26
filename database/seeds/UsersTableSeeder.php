<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
      DB::table('users')->truncate();
      DB::table('roles')->truncate();
      DB::table('role_users')->truncate();
      $role = [
      'name' => 'Admin',
      'slug' => 'admin',
      'permissions' => [
        'admin' => true,
      ]
      ];
      $adminRole = Sentinel::getRoleRepository()->createModel()->fill($role)->save();
        $freelancerRole = [
        'name' => 'Freelancer',
        'slug' => 'freelancer',
      ];

      Sentinel::getRoleRepository()->createModel()->fill($customerRole)->save();
        $admin = [
        'email'    => 'mondiakering@gmail.com',
        'password' => 'mondeer89',
      ];
      $adminUser = Sentinel::registerAndActivate($admin);
      $adminUser- >roles()->attach($adminRole);
    }
}
