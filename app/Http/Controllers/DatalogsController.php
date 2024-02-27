<?php

namespace App\Http\Controllers;
use App\Exports\DatalogsExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class DatalogsController extends Controller
{
    public function export()
    {
        return Excel::download(new DatalogsExport(), 'datalogs.xlsx');
    }
}
