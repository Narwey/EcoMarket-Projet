<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRecords = [
            [
                'id'=>1, 
                'name'=>'Super Admin', 
                'email'=>'admin@admin.com',
                'password'=>'$2a$12$bpp75YG0CWlsb6APLlQJRuvSXCd55KqzBpq2ooIAT8V4zjle5xEQW',
                'type'=>'superadmin', 
                'vendor_id'=>0, 
                'mobile'=>'0011223344',
                'image'=>'',
                'status'=>1
            ],
        ];
        Admin::insert($adminRecords);
    }
}
