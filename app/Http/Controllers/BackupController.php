<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Spatie\Backup\Tasks\Backup\BackupJob;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\DB; // Import the DB facade

class BackupController extends Controller
{
    public function createAndDownloadBackup(Request $request)
    {
        try {
            // Get table names from the request
            $tableNames = $request->input('tables');
    
            // Check if table names are provided
            if (!$tableNames) {
                throw new \Exception('Table names must be provided.');
            }
    
            // Split the table names into an array
            $tableNamesArray = explode(',', $tableNames);
    
            // Initialize an array to store table data
            $tableData = [];
    
            // Loop through each table name
            foreach ($tableNamesArray as $tableName) {
                // Fetch data for the current table
                $tableRows = DB::table(trim($tableName))->get();
                // Add table data to the result
                $tableData[$tableName] = $tableRows;
            }
    
            // Return table data in JSON format
            return response()->json(['tables' => $tableData]);
        } catch (\Exception $e) {
            // Handle error
            return response()->json(['error' => 'Failed to retrieve table data: ' . $e->getMessage()], 500);
        }
}
}