<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $tab = $request->query('tab', 'mechanical');

        return view('Services.index', [
            'initialTab' => $tab
        ]);
    }
}