<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SmartHome;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = SmartHome::all();

        return response([
            'status' => 'success',
            'data' => $data
        ]);
    }
    public function update(Request $request, $id){
        $data = SmartHome::find($id);

        if($data->status == 'active'){
            $data->update([
                'status' => 'not active'
            ]);
        }elseif($data->status == 'not active'){
            $data->update([
                'status' => 'active'
            ]);
        }

        return response([
            'status' => 'success',
            'message' => 'Status Menjadi ' . $data->status
        ]);
    }
}
