<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\ServiceBulletin;
use Illuminate\Http\Request;
class ServiceBulletinController extends Controller
{
    public function index()
    {
        $nama = "Service";
        $background = "header3.jpg";
        $titles = array("Services","Manuals","Aircraft Manuals","SB Index");
        $sb = DB::table('tmservice_bulletin')->get();
        return view('layouts.services.sb',compact('sb','nama','background','titles'));
    }
}
