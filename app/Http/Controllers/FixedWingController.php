<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FixedWingController extends Controller
{
    public function index()
    {
        $nama = "Aircraft";
        $background = "header4.jpg";
        $titles = array("Aircraft","Fixed Wing");
        $fixed = DB::connection('mysql')->table('tmptdiac')->where('i_ptdi_ac',1)->get();
        return view('layouts.fixedwing',compact('fixed','nama','background','titles'));
    }

}
