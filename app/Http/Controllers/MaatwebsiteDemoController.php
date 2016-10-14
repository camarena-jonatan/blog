<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Agenda;


use App\Item;
use DB;
use Excel;

class MaatwebsiteDemoController extends Controller
{
	public function importExport(){
		return view('importExport');
	}
	public function downloadExcel($type){
	
	}
	public function importExcel(Request $request){

		$file =  $request->file('file');
		
		$data = Excel::load($file)->get();

		return response()->json(["status" => "excelready"]);

	}
}