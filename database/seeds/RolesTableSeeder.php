<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;

class RolesTableSeeder extends Seeder
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


        \DB::table('roles')->delete();

        \DB::table('roles')->insert([
            0 => [
                'id'           => 1,
                'name'         => 'admin',
                'display_name' => '管理员',
                'description' => '具备管理员权限',
                'created_at'   => '2016-10-21 22:31:20',
                'updated_at'   => '2016-10-21 22:31:20',
            ],
            1 => [
                'id'           => 2,
                'name'         => 'member',
                'display_name' => '普通会员',
                'description' => '普通注册会员',
                'created_at'   => '2016-10-21 22:31:38',
                'updated_at'   => '2016-10-21 22:31:38',
            ],
        ]);
    }
}
