<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoapIndexController extends Controller
{
    public function index()
    {
    $nama = "Service";
    $background = "header3.jpg";
    $titles = array("Services","Manuals","Aircraft Manuals","Loap Index");
    $loap = DB::table('trloap')->get();
    return view('layouts.services.loap',compact('loap','nama','background','titles'));
    }
}
