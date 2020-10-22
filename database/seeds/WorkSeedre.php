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
        for($i = 0; $i < 5; $i++) {
            DB::table('works')->insert([
                'user_id' => 1,
                'work_name' => 'test work' + $i,
                'outline' => 'Laravel ' + str_random(10),
            ]);
        }
    }
}
