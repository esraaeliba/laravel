<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactusController extends Controller
{
    public function index()
    {
        return view('pages.contactus');
    }
}