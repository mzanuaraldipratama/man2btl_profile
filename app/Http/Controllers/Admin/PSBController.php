<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;

class PSBController extends Controller
{
    public function index()
    {
        $psb = Registration::paginate(10);
        return view('admin.psb.index', compact('psb'));
    }
    public function show($id)
    {
        $psb = Registration::findOrFail($id);
        return view('admin.psb.show', compact('psb'));
    }
}
