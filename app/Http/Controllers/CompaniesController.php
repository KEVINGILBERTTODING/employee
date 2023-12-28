<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
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

        dd($data);
    }
}
