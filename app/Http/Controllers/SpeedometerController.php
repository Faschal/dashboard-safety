<?php

namespace App\Http\Controllers;

use App\Imports\SpeedometerImport;
use App\Speedometer;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SpeedometerController extends Controller
{
    public function index()
    {
        $data = Speedometer::all();              

        return view('dashboard-speedometer.speedometer', [
            'title' => 'dashboard-speedometer',
            'data' => $data[0],
        ]);
    }

    public function input()
    {
        return view('dashboard-speedometer.input-speedometer', [
            'title' => 'input-speedometer'
        ]);
    }

    public function import(Request $request)
    { 
        $validated = $request->validate([
            'select_file' => 'required|mimes:csv,txt,xls,xlsx|max:2048',            
        ], [
            'select_file.mimes' => 'The select file must be a file of type: csv, xls, xlsx.',
        ]);       

        $import = Excel::import(new SpeedometerImport, request()->file('select_file'));
                
        return response()->json([
            'success' => 'File Uploaded Successfully',            
        ]);        
    }
    
}
