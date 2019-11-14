<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
                ['event_type_id' => 1,
                'school_id' => 1,
                'date_start' => '2019-09-20',
                'date_finish' => '2019-09-20',
                'time_at' => '07.00',
                'time_until' => '14.00',
                'staff_name' => 'Ivan, Kharla',
                'location' => 'Ruang kelas SMA Hang tuah 2 Sidoarjo',
                'notes' => 'Kwitansi belum diambil',
                'is_done' => 0],
            
                ['event_type_id' =>2,
                'school_id' => 2,
                'date_start' => '2019-09-22',
                'date_finish' => '2019-09-22',
                'time_at' => '07.00',
                'time_until' => '15.00',
                'staff_name' => 'Yanti, Kharla',
                'location' => 'Lapangan SMA Barunawati',
                'notes' => 'Kwitansi Sudah diambil',
                'is_done' => 0],

                ['event_type_id' => 3,
                'school_id' => 3,
                'date_start' => '2019-10-25',
                'date_finish' => '2019-10-26',
                'time_at' => '07.00',
                'time_until' => '13.00',
                'staff_name' => 'Ivan, Dony',
                'location' => 'Aula',
                'notes' => '2 hari berturut-turut | Kwitansi belum diambil',
                'is_done' => 0],
            ];

            //Masukkan data ke DB
            DB::table('events')->insert($events);
    }
}
