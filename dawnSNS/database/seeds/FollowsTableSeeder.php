<?php

use Illuminate\Database\Seeder;

class FollowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('follows')->insert([
            [
                'follow_id' => '1',
                'follower_id' => '2'
            ],
            [
                'follow_id' => '1',
                'follower_id' => '3'
            ],
            [
                'follow_id' => '2',
                'follower_id' => '1'
            ],
            [
                'follow_id' => '3',
                'follower_id' => '1'
            ]
        ]);
    }
}
