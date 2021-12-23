<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

    //     Customer::insert([
    //         'first_name' => 'Test First name',
    //         'last_name' => 'Test Last name',
    //         'email' => 'Test email',
    //         'age' => '1',
    //         'booking_date' => '2021-12-02',
    //         'amount_to_pay' => '123',
    //         'others' => 'This is a test',
    //         'flight_id' => '1',
    //         'flight_class' => '1',
    //         'created_at' => now(),
    //         'updated_at' => now()
    //     ],
    //     [
    //         'first_name' => 'Test First name1',
    //         'last_name' => 'Test Last name',
    //         'email' => 'Test email',
    //         'age' => '1',
    //         'booking_date' => '2021-12-02',
    //         'amount_to_pay' => '123',
    //         'others' => 'This is a test',
    //         'flight_id' => '1',
    //         'flight_class' => '1',
    //         'created_at' => now(),
    //         'updated_at' => now()
    //     ]    
    // );
    DB::table('customers')->insert(
            [
                [
                    'first_name' => 'Test First name',
                    'last_name' => 'Test Last name',
                    'email' => 'Test email',
                    'age' => '1',
                    'booking_date' => '2021-12-02',
                    'amount_to_pay' => '123',
                    'others' => 'This is a test',
                    'flight_id' => '1',
                    'flight_class' => '1',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'first_name' => 'Test First name1123',
                    'last_name' => 'Test Last name',
                    'email' => 'Test email',
                    'age' => '1',
                    'booking_date' => '2021-12-02',
                    'amount_to_pay' => '123',
                    'others' => 'This is a test',
                    'flight_id' => '1',
                    'flight_class' => '1',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'first_name' => 'Test First name1asdasd',
                    'last_name' => 'Test Last name',
                    'email' => 'Test email',
                    'age' => '1',
                    'booking_date' => '2021-12-02',
                    'amount_to_pay' => '123',
                    'others' => 'This is a test',
                    'flight_id' => '1',
                    'flight_class' => '1',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'first_name' => 'Test First namasdasde1',
                    'last_name' => 'Test Last name',
                    'email' => 'Test email',
                    'age' => '1',
                    'booking_date' => '2021-12-02',
                    'amount_to_pay' => '123',
                    'others' => 'This is a test',
                    'flight_id' => '1',
                    'flight_class' => '1',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]
        );
    }
}
