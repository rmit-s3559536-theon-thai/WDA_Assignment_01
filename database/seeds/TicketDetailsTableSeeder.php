<?php

use Illuminate\Database\Seeder;
use App\TicketDetails;

class TicketDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<20;$i++) {
            TicketDetails::create(array(
                'user_id' => 6,
                'os' => 'iOS',
                'issue' => 'test '.$i,
                'status' => 'pending',
            ));
        }
    }
}
