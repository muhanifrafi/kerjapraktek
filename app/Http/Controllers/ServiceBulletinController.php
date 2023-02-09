<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceBulletin;

class ServiceBulletinController extends Controller
{
    public function index()
    {
        $nama = "Service";
        $background = "header3.jpg";
        $titles = array("Services","Manuals","Aircraft Manuals","SB Index");
        $sb = DB::table('tmservice_bulletin')->where('id',1)->get();
        return view('layouts.services.sb',compact('sb','nama','background','titles'));
    }
}
