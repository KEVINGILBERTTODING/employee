<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class EmployeeController extends Controller
{
    function index()
    {
        $data = [
            'dataCompanies' => Companies::get()
        ];
        return view('employee.index', $data);
    }

    function getEmployee()
    {
        $data = Employee::select(
            'employees.*',
            'companies.name as company_name',

        )
            ->leftJoin('companies', 'employees.company_id', '=', 'companies.id')
            ->get();

        return DataTables::of($data)->make(true);
    }

    function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'company_id' => 'required|exists:companies,id',
            'first_nm' => 'required|string',
            'last_nm' => 'required|string',
            'phone' => 'required|string|min:9',
            'email' => 'required|email|unique:employees,email',

        ], [
            'required' => ':attribute tidak boleh kosong!',
            'email' => ':attribute tidak valid!',
            'string' => ':attribute hanya boleh huruf dan angka!',
            'exists' => ':attrbute tidak valid!',
            'unique' => ':attribute telah terdaftar!',
            'min' => ':attribute tidak boleh kurang dari 9 karakter!'
        ], [
            'first_nm' => 'First name',
            'last_nm' => 'First name',
            'email' => 'Email',
            'phone' => 'Phone Number',
            'company_id' => 'Company'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('failed', $validator->errors()->first());
        }

        try {
            $data = [
                'first_nm' => $request->first_nm,
                'last_nm' => $request->first_nm,
                'company_id' => $request->company_id,
                'phone' => $request->phone,
                'email' => $request->email,
            ];

            $insert  = Employee::create($data);
            if ($insert) {
                return redirect()->back()->with('success', 'Berhasil menambahkan data!');
            } else {
                return redirect()->back()->with('failed', 'Gagal menambahkan data!');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('failed', 'Terjadi kesalahan!');
        }
    }
    function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:employees,id',
            'company_id' => 'required|exists:companies,id',
            'first_nm' => 'required|string',
            'last_nm' => 'required|string',
            'phone' => 'required|string|min:9',
            'email' => 'required|email|unique:employees,email,' . $request->id . 'except,id',

        ], [
            'required' => ':attribute tidak boleh kosong!',
            'email' => ':attribute tidak valid!',
            'string' => ':attribute hanya boleh huruf dan angka!',
            'exists' => ':attrbute tidak valid!',
            'unique' => ':attribute telah terdaftar!',
            'min' => ':attribute tidak boleh kurang dari 9 karakter!'
        ], [
            'first_nm' => 'First name',
            'last_nm' => 'First name',
            'email' => 'Email',
            'phone' => 'Phone number',
            'id' => 'Companies',
            'company_id' => 'Company'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('failed', $validator->errors()->first());
        }

        try {
            $data = [
                'first_nm' => $request->first_nm,
                'last_nm' => $request->first_nm,
                'company_id' => $request->company_id,
                'phone' => $request->phone,
                'email' => $request->email,
            ];

            $update  = Employee::where('id', $request->id)->update($data);
            if ($update) {
                return redirect()->back()->with('success', 'Berhasil mengubah data!');
            } else {
                return redirect()->back()->with('failed', 'Gagal mengubah data!');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('failed', 'Terjadi kesalahan!');
        }
    }

    function getEmployeeById($id)
    {
        try {
            $data = Employee::find($id);
            return response($data);
        } catch (\Throwable $th) {
            return response([
                'code' => 500,
                'status' => false,
                'message' => 'Failed get employee data!'

            ]);
        }
    }

    function destroy($id)
    {
        try {
            $delete = Employee::where('id', $id)->delete();
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
