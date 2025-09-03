<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KegiatanController extends Controller
{
    public function index()
    {
        try {
            $kegiatans = Kegiatan::latest()->get();
            return response()->json([
                'success' => true,
                'data' => $kegiatans
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengambil data kegiatan',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'lokasi' => 'nullable|string|max:255',
            'gambar' => 'nullable|string',
        ]);

        DB::beginTransaction();
        try {
            $kegiatan = Kegiatan::create($request->all());
            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Kegiatan berhasil ditambahkan',
                'data' => $kegiatan
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Gagal menambahkan kegiatan',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function show($id)
    {
        try {
            $kegiatan = Kegiatan::findOrFail($id);
            return response()->json([
                'success' => true,
                'data' => $kegiatan
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Kegiatan tidak ditemukan',
                'error' => $e->getMessage()
            ], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'lokasi' => 'nullable|string|max:255',
            'gambar' => 'nullable|string',
        ]);

        DB::beginTransaction();
        try {
            $kegiatan = Kegiatan::findOrFail($id);
            $kegiatan->update($request->all());
            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Kegiatan berhasil diperbarui',
                'data' => $kegiatan
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Gagal memperbarui kegiatan',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $kegiatan = Kegiatan::findOrFail($id);
            $kegiatan->delete();
            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Kegiatan berhasil dihapus'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Gagal menghapus kegiatan',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
