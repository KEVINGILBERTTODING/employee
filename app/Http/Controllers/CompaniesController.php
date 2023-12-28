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
            'email' => 'required|email',
            'address' => 'required|string'
        ], [
            'required' => ':attribute tidak boleh kosong!',
            'email' => ':attribute tidak valid!',
            'string' => ':attrbute hanya boleh huruf dan angka!'
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
}
