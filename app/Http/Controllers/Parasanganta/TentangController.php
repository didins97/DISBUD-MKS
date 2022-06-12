<?php

namespace App\Http\Controllers\Parasanganta;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index(){
        return view('parasanganta.content.tentang');
    }
}
