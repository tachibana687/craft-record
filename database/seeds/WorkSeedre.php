<?php

use Illuminate\Database\Seeder;

class WorkSeedre extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('works')->insert([
            'user_id' => 1,
            'work_name' => 'test work',
            'outline' => 'Laravel',
        ]);
    }
}
