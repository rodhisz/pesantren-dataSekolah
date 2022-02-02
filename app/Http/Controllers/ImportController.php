<?php

namespace App\Http\Controllers;

use App\Imports\DataImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function index()
    {
        return view('import');
    }

    public function dataImport (Request $request)
    {
        $file = $request->file('file');
        Excel::import(new DataImport, $file);
        return back();
    }
}
