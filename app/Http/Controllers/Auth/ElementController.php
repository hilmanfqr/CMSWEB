<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ElementController extends Controller
{
    public function showButton()
    {
        return view('auth.element.button');
    }

    public function showType()
    {
        return view('auth.element.type');
    }
}
