<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPembayaranController extends Controller
{
    public function index()
    {
        // nanti bisa ambil data pembayaran berdasarkan user login
        return view('user.pembayaran.index');
    }

    public function show($id)
    {
        return view('user.pembayaran.show', compact('id'));
    }
}
