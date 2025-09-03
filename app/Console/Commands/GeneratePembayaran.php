<?php
namespace App\Console\Commands;

use App\Models\Pembayaran;
use Illuminate\Console\Command;

class GeneratePembayaran extends Command
{
    protected $signature   = 'pembayaran:generate';
    protected $description = 'Generate pembayaran otomatis setiap tanggal 4';

    public function handle()
    {
        // Cek apakah sudah ada data untuk bulan ini
        $today  = now()->startOfMonth()->toDateString();
        $exists = Pembayaran::whereDate('tanggal', $today)->exists();

        if (! $exists) {
            Pembayaran::create([
                'keamanan'   => 101120,
                'lingkungan' => 40000,
                'tanggal'    => $today,
                'total'      => 101120 + 40000,
                'status'     => 'Belum terbayar',
            ]);

            $this->info("Pembayaran bulan ini berhasil dibuat.");
        } else {
            $this->info("Pembayaran bulan ini sudah ada.");
        }
    }
}