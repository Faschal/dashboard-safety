<?php

namespace App\Http\Controllers;

use App\Imports\PyramidImport;
use App\Pyramid;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PyramidController extends Controller
{
    public function index()
    {
        $data = Pyramid::all();

        return view('dashboard-pyramid.pyramid', [
            'title' => 'dashboard-pyramid',
            'data' => $data[0],
        ]);
    }

    public function input()
    {
        return view('dashboard-pyramid.input-pyramid', [
            'title' => 'input-pyramid'
        ]);
    }

    public function import(Request $request)
    { 
        $validated = $request->validate([
            'select_file' => 'required|mimes:csv,txt,xls,xlsx|max:2048',
        ]);       

        $import = Excel::import(new PyramidImport, request()->file('select_file'));
                
        return response()->json([
            'success' => 'File Uploaded Successfully',            
        ]);        
    }
}
