<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class CompaniesController extends Controller
{
    function index()
    {
        return view('companies.index');
    }

    function getCompanies()
    {
        $data = Companies::get();
        return DataTables::of($data)->make(true);
    }

    function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:companies,email',
            'address' => 'required|string'
        ], [
            'required' => ':attribute tidak boleh kosong!',
            'email' => ':attribute tidak valid!',
            'string' => ':attribute hanya boleh huruf dan angka!',
            'unique' => ':attribute telah terdaftar!'
        ], [
            'name' => 'Name',
            'email' => 'Email',
            'address' => 'Address'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('failed', $validator->errors()->first());
        }

        try {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address
            ];

            $insert  = Companies::create($data);
            if ($insert) {
                return redirect()->back()->with('success', 'Berhasil menambakan data baru!');
            } else {
                return redirect()->back()->with('failed', 'Gagal menambakan data baru!');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('failed', 'Terjadi kesalahan!');
        }
    }

    function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:companies,id',
            'name' => 'required|string',
            'email' => 'required|email|unique:companies,email,' . $request->id . 'except,id',
            'address' => 'required|string'
        ], [
            'required' => ':attribute tidak boleh kosong!',
            'email' => ':attribute tidak valid!',
            'string' => ':attribute hanya boleh huruf dan angka!',
            'exists' => ':attrbute tidak valid!',
            'unique' => ':attribute telah terdaftar!'
        ], [
            'name' => 'Name',
            'email' => 'Email',
            'address' => 'Address',
            'id' => 'Companies'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('failed', $validator->errors()->first());
        }

        try {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address
            ];

            $update  = Companies::where('id', $request->id)->update($data);
            if ($update) {
                return redirect()->back()->with('success', 'Berhasil mengubah data!');
            } else {
                return redirect()->back()->with('failed', 'Gagal mengubah data!');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('failed', 'Terjadi kesalahan!');
        }
    }

    function getCompaniesById($id)
    {
        try {
            $data = Companies::find($id);
            return response($data);
        } catch (\Throwable $th) {
            return response([
                'code' => 500,
                'status' => false,
                'message' => 'Failed get companies data!'

            ]);
        }
    }

    function destroy($id)
    {
        try {
            $delete = Companies::where('id', $id)->delete();
            if ($delete) {
                return redirect()->back()->with('success', 'Berhasil menghapus data!');
            } else {
                return redirect()->back()->with('failed', 'Gagal menghapus data!');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('failed', 'Terjadi kesalahan!');
        }
    }
}
