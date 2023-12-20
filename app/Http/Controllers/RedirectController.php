<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function cek() {
        if (auth()->user()->role === 'admin') {
            return redirect('/admin');
        } else {
            return redirect('/student');
        }
    }
}
