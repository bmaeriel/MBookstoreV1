<?php
# @Author: maerielbenedicto
# @Date:   2019-11-02T15:17:11+00:00
# @Last modified by:   maerielbenedicto
# @Last modified time: 2019-11-12T00:35:32+00:00




use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_admin = Role::where('name','admin')->first();
        $role_user = Role::where('name','user')->first();

        $admin = new User();
        $admin->name = 'Maeriel B';
        $admin->email = 'admin@mbookstore.ie';
        $admin->password = bcrypt('secret');
        $admin->save();
        $admin->roles()->attach($role_admin);


        $user = new User();
        $user->name = 'Karen C';
        $user->email = 'kc@mbookstore.ie';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'Zion B';
        $user->email = 'zb@mbookstore.ie';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'Keigh M';
        $user->email = 'km@mbookstore.ie';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'Roselie A';
        $user->email = 'ra@mbookstore.ie';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'Harriet E ';
        $user->email = 'he@mbookstore.ie';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_user);

    }
}
