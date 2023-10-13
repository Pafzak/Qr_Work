<?php

namespace Database\Seeders;

use App\Helpers\Helper;
use App\Models\Participant;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // for ($i=0; $i < 10 ; $i++) {
        // $qrCode = Helper::generateRandomStringAndQrCode($i);
        //     Participant::create([
        //         'nom'=> $faker->name,
        //         'qr_code'=>$qrCode['randomString'],
        //         //affichage
        //         'qr_code_path'=>$qrCode['qrCodePath'],
        //     ]);
        // }
    }
}
