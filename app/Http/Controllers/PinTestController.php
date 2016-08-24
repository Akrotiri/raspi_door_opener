<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PinTestController extends Controller
{
    public function getIndex() {
        return view('pages.test');
    }
}
