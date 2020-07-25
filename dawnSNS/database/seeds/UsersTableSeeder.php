<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'aaa111あああ',
                'mail' => 'aaa111@sample.sam',
                'password' => 'aaa111',
                'bio' => 'sampleサンプルさんぷるaaa'
            ],
            [
                'username' => 'bbb222いいい',
                'mail' => 'bbb222@sample.sam',
                'password' => 'bbb222',
                'bio' => 'sampleサンプルさんぷるbbb'
            ],
            [
                'username' => 'ccc333ううう',
                'mail' => 'ccc333@sample.sam',
                'password' => 'ccc333',
                'bio' => ''
            ]
        ]);
    }
}
