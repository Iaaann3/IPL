<?php

namespace App\Http\Controllers;

use App\Models\KritikSaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KritikSaranController extends Controller
{
    public function index()
    {
        try {
            $data = KritikSaran::with('user')->latest()->get();

            return response()->json([
                'success' => true,
                'data' => $data
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengambil data kritik & saran',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_user' => 'nullable|exists:users,id',
            'isi' => 'required|string',
        ]);

        DB::beginTransaction();
        try {
            $kritikSaran = KritikSaran::create($request->all());
            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Kritik & saran berhasil dikirim',
                'data' => $kritikSaran
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengirim kritik & saran',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function show($id)
    {
        try {
            $kritikSaran = KritikSaran::with('user')->findOrFail($id);

            return response()->json([
                'success' => true,
                'data' => $kritikSaran
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan',
                'error' => $e->getMessage()
            ], 404);
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $kritikSaran = KritikSaran::findOrFail($id);
            $kritikSaran->delete();
            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Kritik & saran berhasil dihapus'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Gagal menghapus kritik & saran',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
