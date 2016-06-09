<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    protected $toTruncate = ['users', 'company_phone', 'company_address',
                                'company_meta', 'company_contact_information'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Model::unguard();

        foreach($this->toTruncate as $table){
            DB::statement('SET FOREIGN_KEY_CHECKS = 0');
            DB::table($table)->truncate();
        }

        $this->call('CommentTableSeeder');
        $this->call('UserTableSeeder');
        $this->command->info('All tables have been seeder');
        Model::reguard();
    }
}
