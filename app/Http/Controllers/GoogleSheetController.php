<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Sheets;
use App\Models\ExcelDataStore;
class GoogleSheetController extends Controller
{
    //
    public function index(){
        $sheet = Sheets::spreadsheet('1nJo5_6btpv4bqNGU_ix75KVK055AyB68QBInv429T94')->sheet('excelsheepapi')->get();
        $header = $sheet->pull(0);
        $values = Sheets::collection(header: $header, rows: $sheet);
        $data =  $values->toArray();
        
        foreach($data as $key=>$r){
            //dd($r);
            //dd($r['fullname']);
            
            $reg=new ExcelDataStore();
            
            $reg->full_name=$r['fullname'];
            $reg->email=$r['email'];
            $reg->date=date("Y-m-d", strtotime($r['date']));
              

            $reg->save();
            
        }
       return redirect('/');
    }


    public function view(){
        $data=ExcelDataStore::latest()->get();
        return view('dataview',compact('data'));

    }
}
