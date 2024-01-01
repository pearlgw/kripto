<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingwaktuController extends Controller
{
    public function index()
    {
        return view('admin.setting_waktu', [
            'user' => auth()->user()->name,
            'image' => auth()->user()->image,
        ]);
    }
}
