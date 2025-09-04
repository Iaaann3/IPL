@extends('layouts.user')

@section('content')
<div class="mobile-container">
    <!-- Header Section -->
    <div class="header-section">
        <div class="profile-avatar">
            <i class="fas fa-user"></i>
        </div>
        <div class="greeting-text">Selamat datang,</div>
        <h1 class="user-name">{{ Auth::user()->name ?? 'User' }}</h1>

        <!-- Balance Card -->
        <div class="balance-card">
    <div class="balance-info">
        <div>
            <p class="balance-label">Tagihan</p>
            <h2 class="balance-amount">
                Rp {{ number_format($tagihan->total ?? 0, 0, ',', '.') }}
            </h2>
            <a href="{{ route('user.pembayaran.index') }}" class="balance-detail">
                klik & cek riwayat
            </a>
        </div>

        @if($tagihan)
            <button type="button" class="topup-btn bayar-home-btn" data-id="{{ $tagihan->id }}">
                Bayar
            </button>
            <div class="bayar-success-anim d-none mt-2">
                <i class="fas fa-check-circle fa-2x text-success animate__animated animate__bounceIn"></i>
                <span class="text-success ms-2">Pembayaran Berhasil!</span>
            </div>
        @else
            <button class="topup-btn" disabled>
                Tidak ada tagihan
            </button>
        @endif
    </div>
        </div>
    </div>
    <!-- Main Content -->
    <div class="main-content">

        @if($tagihan)
            <a href="{{ route('user.pembayaran.detail', $tagihan->id) }}" class="check-bill-btn">
                <i class="fas fa-file-invoice"></i>
                Cek Tagihan Anda
            </a>
        @endif
        <!-- Services Section -->
        <h3 class="section-title">Info dan Layanan</h3>
        <div class="service-grid">
            <!-- <a href="#" class="service-item">
                <div class="service-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="service-label">Surat</div>
            </a> -->
            <a href="#" class="service-item">
                <div class="service-icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <div class="service-label">Pengumuman</div>
            </a>
            <a href="#" class="service-item">
                <div class="service-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="service-label">Saran & Kritik</div>
            </a>
            <a href="#" class="service-item">
                <div class="service-icon">
                    <i class="fas fa-info-circle"></i>
                </div>
                <div class="service-label">Tata Tertib</div>
            </a>
            <a href="#" class="service-item">
                <div class="service-icon">
                    <i class="fas fa-question-circle"></i>
                </div>
                <div class="service-label">Keluhan</div>
            </a>
            <a href="#" class="service-item">
                <div class="service-icon">
                    <i class="fas fa-exchange-alt"></i>
                </div>
                <div class="service-label">Kegiatan</div>
            </a>
            <!-- <a href="#" class="service-item" style="grid-column: 2;">
                <div class="service-icon">
                    <i class="fas fa-store"></i>
                </div>
                <div class="service-label">Bazaar</div>
            </a> -->
        </div>

        <!-- News Section -->
        <div class="info-section">
            <div class="info-header">
                <h3 class="section-title" style="margin: 0;">Informasi Terkini</h3>
                <a href="#" class="view-all-link">Lihat Semua</a>
            </div>

            <div class="news-item">
                <div class="news-image"></div>
                <div class="news-content">
                    <h6>Pengumuman Pemeliharaan Sistem</h6>
                    <p>Sistem akan mengalami maintenance pada tanggal 15 Oktober 2024...</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"></script>
<script>
document.querySelectorAll('.bayar-home-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const id = this.dataset.id;
        fetch("{{ url('user/pembayaran') }}/" + id + "/bayar", {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json'
            }
        })
        .then(res => res.json())
        .then(data => {
            if(data.success){
                this.classList.add('d-none');
                this.nextElementSibling.classList.remove('d-none');
            }
        });
    });
});
</script>
@endpush
