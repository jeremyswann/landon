<?php

use Illuminate\Database\Seeder;

class HotelTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Eloquent::unguard();

        $this->call('HotelTabelSeeder');
        $this->command->info('Hotel Table seeded!');

        $path = 'landon_data.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Hotel Table seeded!');
    }
}
