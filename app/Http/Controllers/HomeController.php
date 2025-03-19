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
}
