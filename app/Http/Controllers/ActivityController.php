<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = auth()->user()->actions->load('causer');

        return $activities;
    }
}
