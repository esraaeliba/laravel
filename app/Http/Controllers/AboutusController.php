<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AboutusController extends Controller
{
    public function index()
    {
        return view('pages.aboutus');
    }
}