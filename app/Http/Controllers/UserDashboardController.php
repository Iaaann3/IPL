<?php
namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        // Ambil tagihan terakhir user ini
        $tagihan = Pembayaran::where('id_user', $userId)
            ->latest('tanggal')
            ->first();

        return view('users.home.index', [
            'tagihan' => $tagihan,
        ]);
    }
    
}

