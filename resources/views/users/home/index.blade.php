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
                    <p class="balance-label">Saldo Anda</p>
                    <h2 class="balance-amount">
                        Rp {{ number_format(Auth::user()->saldo ?? 0, 0, ',', '.') }}
                    </h2>
                    <a href="#" class="balance-detail">klik & cek riwayat</a>
                </div>
                <button class="topup-btn">
                    <i class="fas fa-plus"></i>
                    Top Up
                </button>
            </div>
        </div>
    </div>
    
    <!-- Main Content -->
    <div class="main-content">
        <button class="check-bill-btn">
            <i class="fas fa-file-invoice"></i>
            Cek Tagihan Anda
        </button>
        
        <!-- Services Section -->
        <h3 class="section-title">Info dan Layanan</h3>
        
        <div class="service-grid">
            <a href="#" class="service-item">
                <div class="service-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="service-label">Surat</div>
            </a>
            <a href="#" class="service-item">
                <div class="service-icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <div class="service-label">Laporan</div>
            </a>
            <a href="#" class="service-item">
                <div class="service-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="service-label">Darurat</div>
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
                <div class="service-label">Transaksi IPL</div>
            </a>
            <a href="#" class="service-item" style="grid-column: 2;">
                <div class="service-icon">
                    <i class="fas fa-store"></i>
                </div>
                <div class="service-label">Bazaar</div>
            </a>
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
