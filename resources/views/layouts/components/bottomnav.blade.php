<div class="row row-cols-5 no-gutters bg-white border-top fixed-bottom">
    <div class="col text-center">
        <a href="{{ url('/') }}" 
           class="btn btn-link {{ request()->is('/') ? 'text-template' : 'text-secondary text-mute' }} material-ripple" 
           data-ripple-color="#5d8f6c">
            <i class="fas fa-home"></i>
        </a>
    </div>
    <div class="col text-center">
        <a href="{{ url('kegiatan') }}" 
           class="btn btn-link {{ request()->is('kegiatan') ? 'text-template' : 'text-secondary text-mute' }} material-ripple" 
           data-ripple-color="#5d8f6c">
            <i class="fas fa-flag"></i>
        </a>
    </div>
    <div class="col text-center">
        <a href="{{ url('payment-history') }}" 
           class="btn btn-link {{ request()->is('payment-history') ? 'text-template' : 'text-secondary text-mute' }} material-ripple" 
           data-ripple-color="#5d8f6c">
            <i class="fas fa-history"></i>
        </a>
    </div>
    <div class="col text-center">
        <a href="{{ url('pengumuman') }}" 
           class="btn btn-link {{ request()->is('pengumuman') ? 'text-template' : 'text-secondary text-mute' }} material-ripple" 
           data-ripple-color="#5d8f6c">
            <i class="fas fa-bullhorn"></i>
        </a>
    </div>
    <div class="col text-center">
        <a href="{{ url('my-profile') }}" 
           class="btn btn-link {{ request()->is('my-profile') ? 'text-template' : 'text-secondary text-mute' }} material-ripple" 
           data-ripple-color="#5d8f6c">
            <i class="fas fa-user"></i>
        </a>
    </div>
</div>
