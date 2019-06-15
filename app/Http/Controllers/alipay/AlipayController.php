<?php

namespace App\Http\Controllers\alipay;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlipayController extends Controller
{
    public function pay(){
        return view('pay.alipay');
    }
}
