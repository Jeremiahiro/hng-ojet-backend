<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{

    //protected $guard_name = 'api'; //
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            Role::create(['name' => 'superadmin', 'guard_name' => 'admin']);
            Role::create(['name' => 'admin', 'guard_name' => 'admin']);
            Role::create(['name' => 'intern', 'guard_name' => 'intern']);


    }
}
