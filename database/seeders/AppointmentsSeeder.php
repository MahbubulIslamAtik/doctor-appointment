<?php

namespace Database\Seeders;

use App\Models\Appointments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $appointment = [
            [
                "id"=>"2", 
                "appointment_id"=>"2", 
                "appointment_date"=> date("Y-m-d"), 
                "doctor_id" => "2", 
                "patient_name"=> "Mahbubul", 
                "patient_phone" => "745784548", 
                "total_fee" => "500", 
                "paid_amount" => "500" 
            ],

            ["id"=>"3", "appointment_id"=>"3", "appointment_date"=> date("Y-m-d"), "doctor_id" => "3", "patient_name"=> "Mahbubul Islam", "patient_phone" => "745784548", "total_fee" => "500", "paid_amount" => "500" ],

            ["id"=>"4", "appointment_id"=>"4", "appointment_date"=> date("Y-m-d"), "doctor_id" => "4", "patient_name"=> "Arafat", "patient_phone" => "745784548", "total_fee" => "500", "paid_amount" => "500" ],

            ["id"=>"5", "appointment_id"=>"5", "appointment_date"=> date("Y-m-d"), "doctor_id" => "5", "patient_name"=> "Islam", "patient_phone" => "745784548", "total_fee" => "500", "paid_amount" => "500" ],

            ["id"=>"6", "appointment_id"=>"6", "appointment_date"=> date("Y-m-d"), "doctor_id" => "6", "patient_name"=> "Sarker", "patient_phone" => "745784548", "total_fee" => "500", "paid_amount" => "500" ],
        ];

        Appointments::insert($appointment);
    }
}
