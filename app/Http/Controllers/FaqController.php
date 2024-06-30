<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
        // FaqController.php
    public function index() {
        return view('templates.faq');
    }

}
