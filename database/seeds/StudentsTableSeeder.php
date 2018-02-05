<?php

use Carbon\Carbon as Carbon;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->truncate();
        factory(App\Student::class, 20)->create();

        DB::table('users')->truncate();

        $users = [
            [
                'name' => 'Demo',
                'email' => 'demo@demo.com',
                'password' => bcrypt('demo'),
                'isAdmin' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin'),
                'isAdmin' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('users')->insert($users);

    }
}
