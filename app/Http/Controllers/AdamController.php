<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdamController extends Controller
{
    public function index()
    {
        $nama = "Service";
        $background = "header3.jpg";
        $titles = array("Services","Technical Support","ADAM");
        $adams = DB::table('tmgeneral')->where('id',4)->get();
        return view('layouts.services.adam',compact('adams','nama','background','titles'));
    }
}
