<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\FarmRelay;
use App\Models\FarmSensor;
use Illuminate\Http\Request;

class FarmController extends Controller
{
    public function index(){
        $data = FarmSensor::all();
        $dataS = FarmRelay::all();

        return response([
            'status' => 'success',
            'data' => $data,
            'datas' => $dataS
        ]);
    }
}
