<?php

use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ticket_details')->insert([
            'issue' => 'Change password?',
            'os' => 'osx'
        ]);

        DB::table('ticket_details')->insert([
            'issue' => 'Enrolment online not working',
            'os' => 'osx'
        ]);

        DB::table('ticket_details')->insert([
            'issue' => 'How do I unenroll from a course?',
            'os' => 'osx'
        ]);
    }
}
