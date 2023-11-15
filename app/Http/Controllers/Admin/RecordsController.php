<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecordsController extends Controller
{
    public function addRecords()
    {
    	return view('admin.records.addRecords',[
    		'title' => 'Add Records',
    		'pagetitle' => 'Add Records'

    	]);
    }
}
