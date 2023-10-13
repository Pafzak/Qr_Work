<?php
namespace App\Helpers;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class Helper{

//    static function generateRandomStringAndQrCode($string)
//     {
//         // Générer un string aléatoire
//         // $randomString = Str::random(4);
//         $randomString =  $string;
//         // Générer un code QR
//         $qrCodePath = public_path("assets/qrcodes/{$randomString}.png");
//         QrCode::format('png')
//             ->size(200)
//             ->generate($randomString, $qrCodePath);

//         return [
//             'randomString' => $randomString,
//             'qrCodePath' => $qrCodePath,
//         ];
//     }
}
