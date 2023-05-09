<?php

namespace App\MyClass;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class MyClassTanggal extends Model
{
    public static function tglFormat($tgl){

        $tgltoTahunBulanTanggal  = Carbon::parse($tgl)->format('Y-m-d');
        $tgltoTanggalBulanTahun  = Carbon::parse($tgl)->format('d-m-Y');
        $tgltoTahunAngka         = Carbon::parse($tgl)->format('Y');
        $tgltoBulanAngka         = Carbon::parse($tgl)->format('m');
        $tgltoTanggal            = Carbon::parse($tgl)->format('d');
        $tgltoJamMenitDetik      = Carbon::parse($tgl)->format('H:i:s');
        $tgltoJamMenit           = Carbon::parse($tgl)->format('H:i');
        $tgltoJam                = Carbon::parse($tgl)->format('H');
        $tgltoMenit              = Carbon::parse($tgl)->format('i');
        $tgltoDetik              = Carbon::parse($tgl)->format('s');
        $tgltoHari               = Carbon::parse($tgl)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l');
        $tgltoFormat1            = Carbon::parse($tgl)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y');
        $tgltoFormat2            = Carbon::parse($tgl)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y H:i:s');
        $tgltoBulanTahun         = Carbon::parse($tgl)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('F Y');

        return [
            'tgltoTahunBulanTanggal'  => $tgltoTahunBulanTanggal,   // 2023-12-25
            'tgltoTanggalBulanTahun'  => $tgltoTanggalBulanTahun,   // 25-12-2023
            'tgltoTahunAngka'         => $tgltoTahunAngka,          // 2023 (Tahun)
            'tgltoBulanAngka'         => $tgltoBulanAngka,          // 12 (Bulan)
            'tgltoTanggal'            => $tgltoTanggal,             // 25 (Tanggal)
            'tgltoJamMenitDetik'      => $tgltoJamMenitDetik,       // 12:45:12
            'tgltoJamMenit'           => $tgltoJamMenit,            // 12:45
            'tgltoJam'                => $tgltoJam,                 // 12 (Jam)
            'tgltoMenit'              => $tgltoMenit,               // 45 (Menit)
            'tgltoDetik'              => $tgltoDetik,               // 12 (Detik)
            'tgltoHari'               => $tgltoHari,                // Senin
            'tgltoFormat1'            => $tgltoFormat1,             // Senin, 25 Desember 2023
            'tgltoFormat2'            => $tgltoFormat2,             // Senin, 25 Desember 2023 12:45:12
            'tgltoBulanTahun'         => $tgltoBulanTahun,          // Desember 2023
        ];
    }
}
