<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HomeRelay;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = HomeRelay::all();

        return response([
            'status' => 'success',
            'data' => $data
        ]);
    }
    public function update(Request $request, $identitas)
    {
        $data = HomeRelay::find(1);

        if (!$data || $identitas < 1 || $identitas > 4) {
            return response()->json(['error' => 'Invalid request'], 400);
        }

        $relayField = 'relay' . $identitas;

        $data->update([
            $relayField => !$data->$relayField
        ]);

        return response([
            'status' => 'success',
            'message' => $relayField . ' Behasil Update'
        ]);
    }

    // public function update(Request $request, $identitas)
    // {
    //     $data = HomeRelay::find(1);

    //     if ($identitas == 1) {
    //         $relay1 = $data->relay1;
    //         if ($relay1 == 1) {
    //             $data->update([
    //                 'relay1' => 0
    //             ]);
    //         } elseif ($relay1 == 0) {
    //             $data->update([
    //                 'relay1' => 1
    //             ]);
    //         }
    //     } elseif ($identitas == 2) {
    //         $relay2 = $data->relay2;
    //         if ($relay2 == 1) {
    //             $data->update([
    //                 'relay2' => 0
    //             ]);
    //         } elseif ($relay2 == 0) {
    //             $data->update([
    //                 'relay2' => 1
    //             ]);
    //         }
    //     } elseif ($identitas == 3) {
    //         $relay3 = $data->relay3;
    //         if ($relay3 == 1) {
    //             $data->update([
    //                 'relay3' => 0
    //             ]);
    //         } elseif ($relay3 == 0) {
    //             $data->update([
    //                 'relay3' => 1
    //             ]);
    //         }
    //     }
    // }
}
