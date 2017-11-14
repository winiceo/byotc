<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
//        $role = Role::firstOrNew(['name' => 'admin']);
//        if (!$role->exists) {
//            $role->fill([
//                    'display_name' => 'Administrator',
//                ])->save();
//        }
//
//        $role = Role::firstOrNew(['name' => 'user']);
//        if (!$role->exists) {
//            $role->fill([
//                    'display_name' => 'Normal User',
//                ])->save();
//        }


        \DB::table('role_user')->delete();

        \DB::table('role_user')->insert([
            0 => [
                'role_id' => 1,
                'user_id' => 1,
            ],
            1 => [
                'role_id' => 2,
                'user_id' => 1,
            ],
        ]);
    }
}
