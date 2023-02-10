<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoapIndexController extends Controller
{
    public function index()
    {
    $nama = "Service";
    $background = "header3.jpg";
    $titles = array("Services","Manuals","Aircraft Manuals","Loap Index");
    $loap = DB::table('trloap')->where('id',2)->get();
    return view('layouts.services.loap',compact('loap','nama','background','titles'));
    }
}
