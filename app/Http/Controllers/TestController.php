<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {

        $footerLists = config('footerData.lists');

        return view('pages.test', compact('footerLists'));
    }
}
