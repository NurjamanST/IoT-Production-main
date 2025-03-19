<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\RfidInvalide;
use App\Models\RfidSdm;
use Illuminate\Http\Request;

class InvalideController extends Controller
{
    public function index(Request $request)
    {
        $data = RfidInvalide::all();
        return response([
            'status' => 'success',
            'data' => $data
         ]);
    }

    public function create($id)
    {
        $invalid = RfidInvalide::find($id);
        return response([
            'status' => 'success',
            'data' => $invalid
        ]);
    }

    public function store(Request $request)
    {
        // return dd($request->all());
        $request->validate([
            'uid' => 'required|unique:rfid_sdms,uid',
            'name' => 'required',
            'identity_number' => 'required|unique:rfid_sdms,identity_number|integer|min:16',
            'gender' => 'required|in:male,female',
            'agency' => 'required'
        ], [
            'required' => ':attribute wajib diisi.',
            'integer' => ':attribute wajib nomor',
            'unique' => ':attribute sudah terdaftar.',
            'in' => ':attribute harus diisi dengan "male" dan "female".'
        ]);

        $data = RfidSdm::create([
            'uid' => $request->uid,
            'name' => $request->name,
            'identity_number' => $request->identity_number,
            'gender' => $request->gender,
            'agency' => $request->agency
        ]);

        // $datas = RfidSdm::create($request->all());
        return response([
            'status' => 'success',
            'message' => 'Berhasil Menambahkan SDM',
            'data' => $data
        ]);
    }

    public function delete($id){
        $data = RfidInvalide::find($id)->delete();
        return response([
            'status' => 'success',
            'message' => 'Data Berhasil Dihapus!!',
            'data' => $data
        ]);
    }
}
