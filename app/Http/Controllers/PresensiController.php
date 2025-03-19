<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\RfidPresensi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RfidInvalide;
use App\Models\RfidSdm;

class PresensiController extends Controller
{
    public function index(){
        $data = RfidPresensi::all();

        return response([
            'status' => 'success',
            'data' => $data
        ]);
    }

    public function capture(Request $request, $uid)
    {
        $sdm = RfidSdm::where('uid', $uid)->first();

        if ($sdm) {
            $today = Carbon::now()->toDateString();
            // return dd($today);
            $cek = RfidPresensi::where('id_sdm', $sdm->id)->whereDate('created_at', $today)->first();
            // return dd($cek);
            if ($cek) {
                $cek->update([
                    'clock_out' => date('H:i:s'),
                    'status' => 'out'
                ]);

                return response()->json([
                    'status' => 'success',
                    'message' => 'Absensi berhasil diedit',
                    'data' => $cek,
                    'sdm' => $sdm
                ]);
            } else {
                $data = RfidPresensi::create([
                    'id_sdm' => $sdm->id,
                    'entry_time' => date('H:i:s'),
                    'status' => 'in',
                    'information' => 'hadir'
                ]);

                return response()->json([
                    'status' => 'success',
                    'message' => 'Berhasil melakukan absen',
                    'data' => $data,
                    'sdm' => $sdm
                ]);
            }
        } else {
            $invalide = RfidInvalide::create([
                'uid' => $uid
            ]);

            return response()->json([
                'status' => 'invalide',
                'message' => 'Kartu Belum terdaftar di aplikasi',
                'data' => $invalide
            ]);
        }
    }
}
