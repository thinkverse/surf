<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeyValuesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('key_values')->delete();

        DB::table('key_values')->insert(array(
            0 =>
            array(
                'id' => 10,
                'type' => 'text_area',
                'key_value_id' => 1,
                'key_value_type' => 'users',
                'key' => 'about',
                'value' => 'Hello I am the admin user. You can update this information in the edit profile section. Hope you enjoy using Wave.',
            ),
        ));
    }
}
