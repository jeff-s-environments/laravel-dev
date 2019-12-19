<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seed
     * 
     * @return void
     */
    public function run()
    {
        DB::insert('insert into users (name, email, password, uuid) values (?, ?, ?, ?)', [
            'Developer',
            'developer@dev.com',
            app('hash')->make('#6ZGY3k2$kYy*jD29WMXW64x7mKHMtdH'),
            Str::uuid()->toString(),
        ]);
    }
}
