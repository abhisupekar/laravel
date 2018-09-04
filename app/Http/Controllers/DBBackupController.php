<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Carbon\Carbon;

class DBBackupController extends Controller
{
    public function index()
    {	
    	Artisan::call("backup:mysql-dump", ["filename" => Carbon::now()->timestamp.".sql"]);	
    	
    }
}
