<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Membuat Role Admin
        $adminRole = new Role();
        $adminRole -> name = "admin";
        $adminRole -> display_name = "Admin";
        $adminRole -> save();

        //Membuat Role Member
		$memberRole = new Role();
        $memberRole -> name = "member";
        $memberRole -> display_name = "Member";
        $memberRole -> save();

        //Membuat Sample Admin
        $admin = new User();
        $admin -> name = 'Sample Admin';
        $admin -> email = 'admin@gmail.com';
        $admin -> password = bcrypt('rahasia');
        $admin -> save();
        $admin -> attachRole($adminRole);

        //Membuat Sample Member

        $admin = new User();
        $admin -> name = 'Sample Member';
        $admin -> email = 'member@gmail.com';
        $admin -> password = bcrypt('rahasia');
        $admin -> save();
        $admin -> attachRole($memberRole);
        
    }
}
