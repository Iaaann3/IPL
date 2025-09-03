<?php

// app/Http/Controllers/PembayaranController.php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class PembayaranController extends Controller
{
    // Menampilkan semua pembayaran
    public function index()
    {
        $data = Pembayaran::where('id_user', auth()->id())->get();
    return view('admin.pembayaran.index', compact('data'));
    }

    // Simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'id_user'    => 'required|exists:users,id',
            'keamanan'   => 'required|integer',
            'kebersihan' => 'required|integer',
            'tanggal'    => 'required|date',
        ]);

        DB::beginTransaction();
        try {
            $total = $request->keamanan + $request->kebersihan;

            $pembayaran = Pembayaran::create([
                'id_user'    => $request->id_user,
                'keamanan'   => $request->keamanan,
                'kebersihan' => $request->kebersihan,
                'tanggal'    => $request->tanggal,
                'status'     => 'belum terbayar',
                'total'      => $total,
            ]);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Pembayaran berhasil dibuat',
                'data'    => $pembayaran
            ]);
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan data',
                'error'   => $e->getMessage()
            ], 500);
        }
    }

    // Update pembayaran
    public function update(Request $request, $id)
    {
        $request->validate([
            'keamanan'   => 'required|integer',
            'kebersihan' => 'required|integer',
            'tanggal'    => 'required|date',
            'status'     => 'required|in:belum terbayar,pembayaran berhasil',
        ]);

        DB::beginTransaction();
        try {
            $pembayaran = Pembayaran::findOrFail($id);
            $total = $request->keamanan + $request->kebersihan;

            $pembayaran->update([
                'keamanan'   => $request->keamanan,
                'kebersihan' => $request->kebersihan,
                'tanggal'    => $request->tanggal,
                'status'     => $request->status,
                'total'      => $total,
            ]);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Pembayaran berhasil diupdate',
                'data'    => $pembayaran
            ]);
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Gagal update data',
                'error'   => $e->getMessage()
            ], 500);
        }
    }

    // Hapus pembayaran
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $pembayaran = Pembayaran::findOrFail($id);
            $pembayaran->delete();

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Pembayaran berhasil dihapus'
            ]);
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Gagal hapus data',
                'error'   => $e->getMessage()
            ], 500);
        }
    }
}
