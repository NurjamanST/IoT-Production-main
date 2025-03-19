<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\RfidSdm;
use Illuminate\Http\Request;

class SdmController extends Controller
{
    public function index()
    {
        $data = RfidSdm::all();

        return response([
            'status' => 'success',
            'data' => $data
        ]);
    }

    public function edit($id)
    {
        $data = RfidSdm::find($id);

        return response([
            'status' => 'success',
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'uid' => 'required|unique:rfid_sdms,uid,' . $id,
            'name' => 'required',
            'identity_number' => 'required|integer|min:16|unique:rfid_sdms,identity_number,' . $id,
            'gender' => 'required|in:male,female',
            'agency' => 'required'
        ], [
            'required' => ':attribute wajib diisi.',
            'integer' => ':attribute wajib nomor',
            'unique' => ':attribute sudah terdaftar.',
            'in' => ':attribute harus diisi dengan "male" dan "female".'
        ]);

        $data = RfidSdm::find($id);
        $data->update([
            'uid' => $request->uid,
            'name' => $request->name,
            'identity_number' => $request->identity_number,
            'gender' => $request->gender,
            'agency' => $request->agency
        ]);

        return response([
            'status' => 'success',
            'message' => 'Data berhasil diupdate',
            'data' => $data
        ]);
    }
}
