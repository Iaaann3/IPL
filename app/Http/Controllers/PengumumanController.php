<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengumumanController extends Controller
{
    public function index()
    {
        try {
            $pengumumans = Pengumuman::latest()->get();
            return response()->json([
                'success' => true,
                'data' => $pengumumans
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengambil data',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|string',
        ]);

        DB::beginTransaction();
        try {
            $pengumuman = Pengumuman::create($request->all());
            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Pengumuman berhasil ditambahkan',
                'data' => $pengumuman
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Gagal menambahkan pengumuman',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function show($id)
    {
        try {
            $pengumuman = Pengumuman::findOrFail($id);
            return response()->json([
                'success' => true,
                'data' => $pengumuman
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan',
                'error' => $e->getMessage()
            ], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|string',
        ]);

        DB::beginTransaction();
        try {
            $pengumuman = Pengumuman::findOrFail($id);
            $pengumuman->update($request->all());
            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Pengumuman berhasil diperbarui',
                'data' => $pengumuman
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Gagal memperbarui pengumuman',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $pengumuman = Pengumuman::findOrFail($id);
            $pengumuman->delete();
            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Pengumuman berhasil dihapus'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Gagal menghapus pengumuman',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
