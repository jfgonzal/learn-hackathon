<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $timeNow = Carbon::now();
        $faker = Faker::create();

        $userData = [
                    ['type' => 'company', 'first_name' => 'John', 'last_name' => 'Doe', 'phone' => $faker->phoneNumber,
                        'email' => 'john@example.com','preferred_contact' => 'email','password' => bcrypt('password')],
                    ['type' => 'company', 'first_name' => 'Jane', 'last_name' => 'Doe', 'phone' => $faker->phoneNumber,
                        'email' => 'jane@example.com','preferred_contact' => 'email','password' => bcrypt('password')],
                    ['type' => 'company', 'first_name' => 'Janice', 'last_name' => 'Doe', 'phone' => $faker->phoneNumber,
                        'email' => 'janice@example.com','preferred_contact' => 'phone','password' => bcrypt('password')],
                    ['type' => 'company', 'first_name' => 'Jerry', 'last_name' => 'Doe', 'phone' => $faker->phoneNumber,
                        'email' => 'jerry@example.com','preferred_contact' => 'email','password' => bcrypt('password')],
                    ['type' => 'company', 'first_name' => 'Jenni', 'last_name' => 'Doe', 'phone' => $faker->phoneNumber,
                        'email' => 'jenni@example.com','preferred_contact' => 'both','password' => bcrypt('password')]
                    ];

        $companyData = [
                        ['user_id' => 1, 'name' => 'Lee County Economic Development', 'partner' => true],
                        ['user_id' => 2, 'name' => 'Score For The Life of Your Business', 'partner' => true],
                        ['user_id' => 3, 'name' => 'Career Source', 'partner' => true],
                        ['user_id' => 4, 'name' => 'United Way', 'partner' => true],
                        ['user_id' => 5, 'name' => 'FGCU Office of Continuing Education & Professional Development', 'partner' => true]
                        ];

        $companyContactInformation = [
                                    ['company_id' => 1, 'first_name' => 'Rachel', 'last_name' => 'Busch',
                                        'email' => 'rachel@example.com', 'title' => 'Special Projects Manager',
                                        'description' => 'Works to retain and encourage expansion of existing businesses, attract new and diversified businesses resulting in high-wage, high-skilled jobs; and improve the overall business environment in Lee County.',
                                        'image' => 'lcedsf.jpeg'],
                                    ['company_id' => 2, 'first_name' => $faker->firstName, 'last_name' => $faker->lastName,
                                        'email' => $faker->email, 'title' => $faker->jobTitle,
                                        'description' => $faker->paragraph,
                                        'image' => 'score.png'],
                                    ['company_id' => 3, 'first_name' => $faker->firstName, 'last_name' => $faker->lastName,
                                        'email' => $faker->email, 'title' => $faker->jobTitle,
                                        'description' => $faker->paragraph,
                                        'image' => 'career.png'],
                                    ['company_id' => 4, 'first_name' => $faker->firstName, 'last_name' => $faker->lastName,
                                        'email' => $faker->email, 'title' => $faker->jobTitle,
                                        'description' => $faker->paragraph,
                                        'image' => 'united.jpeg'],
                                    ['company_id' => 5, 'first_name' => $faker->firstName, 'last_name' => $faker->lastName,
                                        'email' => $faker->email, 'title' => $faker->jobTitle,
                                        'description' => $faker->paragraph,
                                        'image' => 'fgcu.jpeg']
        ];

        $companyMeta = [
                        ['type' => 'has','company_id' => 1, 'site_selection' => true,
                            'financial_assistance' => true, 'other' => true,'Technology' => true,
                            'other_text' => 'Financial incentives-Industrial revenue bonds-Permitting ombudsmanship',
                            'insurance' => true, 'legal_aid' => true],
                        ['type' => 'has','company_id' => 2, 'continuing_education' => true,
                            'financial_assistance' => true, 'other' => true,'Technology' => true,],
                        ['type' => 'has','company_id' => 3, 'site_selection' => true,
                            'financial_assistance' => true, 'other' => true,'Technology' => true,
                            'connectivity' => true, 'social_media' => true],
                        ['type' => 'has','company_id' => 4, 'site_selection' => true,
                            'financial_assistance' => true, 'Technology' => true, 'building_business_plan' => true,
                            'marketing' => true, 'starting_business' => true],
                        ['type' => 'has','company_id' => 5, 'cybersecurity' => true,
                            'government_contracting' => true, 'trademark' => true,'Technology' => true,
                            'financial_assistance' => true, 'hiring' => true, 'succession_planning' => true]
                        ];

        $meta = ['continuing_education', 'government_contracting', 'importing_exporting', 'starting_business',
                'strategic_planning', 'building_business_plan', 'hiring', 'insurance', 'site_selection', 'marketing',
                'social_media', 'technology', 'connectivity', 'cybersecurity', 'financial_assistance', 'financial_planning',
                'legal_aid', 'trademark', 'permitting', 'succession_planning', 'other'];


        $companyAddress = [
                        ['company_id' => 1, 'address' => $faker->address, 'address2' => $faker->address,
                        'city' => $faker->city, 'state' => $faker->locale, 'zip' => $faker->postcode,
                        'country' => 'us'],
                        ['company_id' => 2, 'address' => $faker->address, 'address2' => $faker->address,
                            'city' => $faker->city, 'state' => $faker->locale, 'zip' => $faker->postcode,
                            'country' => 'us'],
                        ['company_id' => 3, 'address' => $faker->address, 'address2' => $faker->address,
                            'city' => $faker->city, 'state' => $faker->locale, 'zip' => $faker->postcode,
                            'country' => 'us'],
                        ['company_id' => 4, 'address' => $faker->address, 'address2' => $faker->address,
                            'city' => $faker->city, 'state' => $faker->locale, 'zip' => $faker->postcode,
                            'country' => 'us'],
                        ['company_id' => 5, 'address' => $faker->address, 'address2' => $faker->address,
                            'city' => $faker->city, 'state' => $faker->locale, 'zip' => $faker->postcode,
                            'country' => 'us']
                        ];

        $companyPhone = [
                            ['company_id' => 1, 'type' => 'cellphone', 'number' => $faker->phoneNumber],
                            ['company_id' => 2, 'type' => 'office', 'number' => $faker->phoneNumber],
                            ['company_id' => 3, 'type' => 'cellphone', 'number' => $faker->phoneNumber],
                            ['company_id' => 4, 'type' => 'office', 'number' => $faker->phoneNumber],
                            ['company_id' => 5, 'type' => 'cellphone', 'number' => $faker->phoneNumber]
                        ];


        for($x = 0; $x < 5; $x++) {

            DB::table('users')->insert([
                'type' => $userData[$x]['type'],
                'first_name' => $userData[$x]['first_name'],
                'last_name' => $userData[$x]['last_name'],
                'phone' => $userData[$x]['phone'],
                'preferred_contact' => $userData[$x]['preferred_contact'],
                'email' => $userData[$x]['email'],
                'password' => $userData[$x]['password'],
                'updated_at' => $timeNow
            ]);

            DB::table('company')->insert([
                'user_id' => $companyData[$x]['user_id'],
                'name' => $companyData[$x]['name'],
                'partner' => $companyData[$x]['partner'],
                'updated_at' => $timeNow
            ]);

            DB::table('company_contact_information')->insert([
                'company_id' => $companyContactInformation[$x]['company_id'],
                'first_name' => $companyContactInformation[$x]['first_name'],
                'last_name' => $companyContactInformation[$x]['last_name'],
                'email' => $companyContactInformation[$x]['email'],
                'title' => $companyContactInformation[$x]['title'],
                'description' => $companyContactInformation[$x]['description'],
                'image' => $companyContactInformation[$x]['image'],
                'updated_at' => $timeNow
            ]);

            DB::table('company_meta')->insert([
                'company_id' => $companyMeta[$x]['company_id'],
                'type' => $companyMeta[$x]['type'],
                'updated_at' => $timeNow
            ]);

            DB::table('company_meta')->where('id', '=', ($x+1))->first();
            foreach($companyMeta[$x] as $key => $meta){
                DB::table('company_meta')->where('id', '=', ($x+1))->update([$key => $meta]);
            }

            DB::table('company_address')->insert([
                'company_id' => $companyAddress[$x]['company_id'],
                'address' => $companyAddress[$x]['address'],
                'address2' => $companyAddress[$x]['address2'],
                'city' => $companyAddress[$x]['city'],
                'state' => $companyAddress[$x]['state'],
                'zip' => $companyAddress[$x]['zip'],
                'country' => $companyAddress[$x]['country'],
                'updated_at' => $timeNow
            ]);


            DB::table('company_phone')->insert([
                'company_id' => $companyPhone[$x]['company_id'],
                'type' => $companyPhone[$x]['type'],
                'number' => $companyPhone[$x]['number'],
                'updated_at' => $timeNow
            ]);

        }

        $userAdminData = [
            ['type' => 'admin', 'first_name' => 'Fernando', 'last_name' => 'Gonzales Del Valle', 'phone' => 2396015898,
                'email' => 'jfgonzal@eagle.fgcu.edu','preferred_contact' => 'email','password' => bcrypt('password')],
            ['type' => 'admin', 'first_name' => 'Brian', 'last_name' => 'Paxson', 'phone' => $faker->phoneNumber,
                'email' => 'bpaxson62@gmail.com','preferred_contact' => 'email','password' => bcrypt('password')]
        ];

        $adminData = [
            ['user_id' => 1],
            ['user_id' => 2]
        ];

        for($i = 0; $i < 2; $i++){
            DB::table('users')->insert([
                'type' => $userAdminData[$i]['type'],
                'first_name' => $userAdminData[$i]['first_name'],
                'last_name' => $userAdminData[$i]['last_name'],
                'phone' => $userAdminData[$i]['phone'],
                'preferred_contact' => $userAdminData[$i]['preferred_contact'],
                'email' => $userAdminData[$i]['email'],
                'password' => $userAdminData[$i]['password'],
                'updated_at' => $timeNow
            ]);

            DB::table('admin')->insert([
                'user_id' => $adminData[$i]['user_id'],
                'updated_at' => $timeNow
            ]);
        }

    }
}
