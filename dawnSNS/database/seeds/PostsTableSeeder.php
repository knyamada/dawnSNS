<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'user_id' => '1',
                'post' => 'samplサンプルさんぷるaaa111_1'
            ],
            [
                'user_id' => '1',
                'post' => 'samplサンプルさんぷるaaa111_2'
            ],
            [
                'user_id' => '2',
                'post' => 'samplサンプルさんぷるbbb222_1'
            ]
        ]);
    }
}
