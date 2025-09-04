<div class="header">
    <div class="row no-gutters">
        <div class="col-auto pt-1 pb-2 pl-3">
                <img src="{{ asset('assets/images/big/pesona1.jpg') }}" alt="Logo" class="header-logo rounded-circle" style="width:36px; height:36px; object-fit:contain;">
        </div>
        <div class="col text-center pl-3">
            <span class=" fs-6">Pesona Prima 8 Banjaran</span>
        </div>
        <div class="col-auto">
            <button class="btn btn-link text-dark" data-toggle="modal" data-target="#notifications">
                <i class="fas fa-bell pt-1"></i>
            </button>
            <button class="btn btn-link text-dark dropdown-toggle" data-toggle="dropdown">
                <i class="fas fa-bars pt-1"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right pb-0" style="font-size:12px">
                <a class="dropdown-item text-dark px-3" href="#">
                    <i class="fas fa-image"></i> Pasang Iklan
                </a>
                <a href="javascript:;" class="dropdown-item text-dark px-3" data-toggle="modal" data-target="#modal-kritik-saran">
                    <i class="fas fa-envelope-open-text"></i> Kritik & Saran
                </a>
                <div class="dropdown-divider mb-0"></div>
                <a class="dropdown-item text-danger px-3" href="{{ route('logout') }}">
                    <i class="fas fa-power-off"></i> Log out
                </a>
            </div>
        </div>
    </div>
</div>
