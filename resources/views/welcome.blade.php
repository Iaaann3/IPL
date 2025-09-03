<html lang="en" class="teal-theme" style="cursor: move;"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta content="Merlinbox Digital Solution" name="author">
    <meta content="Bentang Artha Residence" name="appname">
    <meta content="1.1.0" name="version">
    <meta content="Sistem Informasi Manajemen Pengelolaan Pengganti Pemeliharaan Lingkungan Bentang Artha Residence" name="description">

            <link rel="stylesheet" type="text/css" href="https://app-monterosa.hoverr.xyz/assets/css/fonts.css">
            <link rel="stylesheet" type="text/css" href="https://app-monterosa.hoverr.xyz/assets/plugins/font-awesome/5.13.0/css/all.min.css">
            <link rel="stylesheet" type="text/css" href="https://app-monterosa.hoverr.xyz/assets/facade/vendor/materializeicon/material-icons.css">
            <link rel="stylesheet" type="text/css" href="https://app-monterosa.hoverr.xyz/assets/facade/vendor/bootstrap/4.4.1/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="https://app-monterosa.hoverr.xyz/assets/facade/vendor/bootstrap/4.4.1/css/bootstrap-float-label.min.css">
            <link rel="stylesheet" type="text/css" href="https://app-monterosa.hoverr.xyz/assets/facade/vendor/select2/select2.min.css">
            <link rel="stylesheet" type="text/css" href="https://app-monterosa.hoverr.xyz/assets/plugins/animate/animate.min.css">
            <link rel="stylesheet" type="text/css" href="https://app-monterosa.hoverr.xyz/assets/facade/vendor/owlcarousel2/assets/owl.carousel.min.css">
            <link rel="stylesheet" type="text/css" href="https://app-monterosa.hoverr.xyz/assets/facade/vendor/owlcarousel2/assets/owl.theme.green.min.css">
            <link rel="stylesheet" type="text/css" href="https://app-monterosa.hoverr.xyz/assets/facade/css/style.css?09012200">
            <link rel="stylesheet" type="text/css" href="https://app-monterosa.hoverr.xyz/assets/facade/css/custom.css?09012200">
        
    

    <link rel="icon" type="image/png" href="https://app-monterosa.hoverr.xyz/assets/img/favicon.png">
    <style>a {text-decoration:none}</style>

<body>

    <div class="row no-gutters vh-100 loader-screen" style="display: none;">
        <div class="col align-self-center text-white text-center">
            <img src="https://app-monterosa.hoverr.xyz/assets/img/logo-white.png" alt="Bentang Artha Residence" style="width:100px">
            <h1 class="mt-3 mb-0"><b>Bentang Artha</b></h1>
            <h2>Residence</h2>
            <div class="loaderhorizontal">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

     <div id="home-page" class="wrapper homepage">
    <!-- header -->
    <div class="header">
        <div class="row no-gutters">
            <div class="col-auto pt-1 pb-2" style="padding-left:15px">
                <img src="https://app-monterosa.hoverr.xyz/assets/img/favicon.png" alt="" class="header-logo">
            </div>
            <div class="col text-center pt-3 pl-3">
                Bentang Artha Residence            </div>
            <div class="col-auto">
                <button class="btn btn-link text-dark" data-toggle="modal" data-target="#notifications" style="width:auto;height:46px" fdprocessedid="jfgm5a">
                    <i class="fas fa-bell pt-1"></i>
                </button>
                <button class="btn btn-link text-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height:46px;margin-right:3px;padding-left:5px" fdprocessedid="ecdkqd">
                    <i class="fas fa-bars pt-1"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right pb-0" style="font-size:12px">
                    <a class="dropdown-item text-dark px-3" href="https://api.whatsapp.com/send?phone=6281284841411&amp;text=Halo%2C%20Saya%20mau%20pasang%20iklan%20nih">
                        <i class="fas fa-image"></i> Pasang Iklan
                    </a>
                    <a href="javascript:;" class="dropdown-item text-dark px-3" data-toggle="modal" data-target="#modal-kritik-saran" style="text-decoration:none">
                        <i class="fas fa-envelope-open-text"></i> Kritik &amp; Saran
                    </a>

                    
                    <div class="dropdown-divider mb-0"></div>
                    <a class="dropdown-item text-danger px-3" href="https://app-monterosa.hoverr.xyz/logout">
                        <i class="fas fa-power-off"></i> Log out
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card bg-template shadow h-140">
            <div class="card-body">
                <div class="row">
                    <div class="col-auto">
                        <a href="https://app-monterosa.hoverr.xyz/my-profile">
                            <figure class="avatar avatar-60">
                                <img src="https://app-monterosa.hoverr.xyz/assets/img/members/default.jpg">                            </figure>
                        </a>
                    </div>
                    <div class="col pl-0 align-self-center">
                        <h6 class="font-weight-bold mb-1">
                            Hingki Zulfikar                        </h6>
                        <p class="text-mute font-weight-bold small">No. Rumah : D15</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form id="payment-form" role="form" action="https://app-monterosa.hoverr.xyz/xpay_invoice_save" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="result_type" id="result-type" value="">
        <input type="hidden" name="result_data" id="result-data" value="">
        <input type="hidden" name="result_item" id="result-item" value="">
    </form>

    <div class="container top-100">
        <div class="card mb-4 shadow" style="width:90%;left:5%;top:50px;">
            <div class="card-body">
                <div id="show-bill" class="row"><div class="col text-center"><h5 class="text-template mb-0" style="line-height:1"><b>Thank you <small><i class="fas fa-check-circle text-template"></i></small></b></h5><hr class="my-2" style="border-top: 1px dashed rgba(135, 115, 181, 0.75)"><h6 class="text-template mb-0" style="line-height:1;font-size:.9rem">You have no outstanding bills</h6></div></div>
            </div>
        </div>
    </div>

    <div class="row" style="margin:75px auto 0">
        <div class="container px-0">
            <div class="owl-carousel owl-theme owl-loaded owl-drag">
                
                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-706px, 0px, 0px); transition: all; width: 1866px; padding-left: 50px; padding-right: 50px;"><div class="owl-item cloned" style="width: 343.2px; margin-right: 10px;"><a href="javascript:;" url-api="#" class="data-mgm-gsp" style="text-decoration:none" data-toggle="modal" data-target="#modal-prospect-form">
                    <div class="material-ripple item" data-ripple-color="#fff" style="border-radius:10px">
                        <img src="https://app-monterosa.hoverr.xyz/assets/img/mgm-gsp.jpg" alt="Member Get Member" class="w-100" style="max-height:120px;object-fit:cover;border-radius:10px">
                    </div>
                </a></div><div class="owl-item cloned" style="width: 343.2px; margin-right: 10px;"><a href="javascript:;" url-api="#" class="data-mgm-gsp" style="text-decoration:none" data-toggle="modal" data-target="#modal-prospect-form">
                    <div class="material-ripple item" data-ripple-color="#fff" style="border-radius:10px">
                        <img src="https://app-monterosa.hoverr.xyz/assets/img/mgm-gsp.jpg" alt="Member Get Member" class="w-100" style="max-height:120px;object-fit:cover;border-radius:10px">
                    </div>
                </a></div><div class="owl-item active" style="width: 343.2px; margin-right: 10px;"><a href="javascript:;" url-api="#" class="data-mgm-gsp" style="text-decoration:none" data-toggle="modal" data-target="#modal-prospect-form">
                    <div class="material-ripple item" data-ripple-color="#fff" style="border-radius:10px">
                        <img src="https://app-monterosa.hoverr.xyz/assets/img/mgm-gsp.jpg" alt="Member Get Member" class="w-100" style="max-height:120px;object-fit:cover;border-radius:10px">
                    </div>
                </a></div><div class="owl-item cloned" style="width: 343.2px; margin-right: 10px;"><a href="javascript:;" url-api="#" class="data-mgm-gsp" style="text-decoration:none" data-toggle="modal" data-target="#modal-prospect-form">
                    <div class="material-ripple item" data-ripple-color="#fff" style="border-radius:10px">
                        <img src="https://app-monterosa.hoverr.xyz/assets/img/mgm-gsp.jpg" alt="Member Get Member" class="w-100" style="max-height:120px;object-fit:cover;border-radius:10px">
                    </div>
                </a></div><div class="owl-item cloned" style="width: 343.2px; margin-right: 10px;"><a href="javascript:;" url-api="#" class="data-mgm-gsp" style="text-decoration:none" data-toggle="modal" data-target="#modal-prospect-form">
                    <div class="material-ripple item" data-ripple-color="#fff" style="border-radius:10px">
                        <img src="https://app-monterosa.hoverr.xyz/assets/img/mgm-gsp.jpg" alt="Member Get Member" class="w-100" style="max-height:120px;object-fit:cover;border-radius:10px">
                    </div>
                </a></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
        </div>
    </div>

    <div class="row" style="margin:0 auto">
        <div class="container">
            <h6 class="subtitle font-weight-bold mt-4">
                Pembayaran Terakhir <a href="https://app-monterosa.hoverr.xyz/payment-history" class="float-right font-weight-bold small" style="text-decoration:none">View All</a>
            </h6>
                            <div id="last-payments0">
                                            <a href="javascript:;" class="data-invoice" data-toggle="modal" data-target="#invoice-detail" id="1656806519">
                            <div class="card material-ripple shadow border-0 mb-3" data-ripple-color="#5d8f6c">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto pr-0">
                                            <div class="avatar avatar-70 no-shadow border-0" style="border-radius:0">
                                                <img src="https://app-monterosa.hoverr.xyz/assets/img/wallet.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h6 class="font-weight-bold mb-0 text-template" style="float:left;font-size:14px">
                                                <small class="text-mute small text-template" style="float:left">                                                02 September, 2025                                                </small><br>
                                                #1656806519                                            </h6>
                                            <h6 class="font-weight-bold mb-0 text-secondary" style="float:right;font-size:14px">
                                                <small style="float:right">IDR</small><br>
                                                Rp 141,120                                            </h6>
                                            <hr class="mb-1" style="margin-top:2.4rem;margin-bottom:.2rem!important">
                                            <small class="text-mute small text-secondary" style="float:left">
                                                <i class="fa fa-exclamation-circle text-warning"></i> Menunggu pembayaran                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                                    </div>
                    </div>
    </div>
    <div class="footer">
        <div class="row row-cols-5 no-gutters">
            <div class="col text-center">
                <a href="https://app-monterosa.hoverr.xyz/" class="btn btn-link text-template material-ripple" data-ripple-color="#5d8f6c">
                    <i class="fas fa-home"></i>
                </a>
            </div>
            <div class="col text-center">
                <a href="https://app-monterosa.hoverr.xyz/kegiatan" class="btn btn-link text-secondary text-mute material-ripple" data-ripple-color="#5d8f6c">
                    <i class="fas fa-flag"></i>
                </a>
            </div>
            <div class="col text-center">
                <a href="https://app-monterosa.hoverr.xyz/payment-history" class="btn btn-link text-secondary text-mute material-ripple" data-ripple-color="#5d8f6c">
                    <i class="fas fa-history"></i>
                </a>
            </div>
            <div class="col text-center">
                <a href="https://app-monterosa.hoverr.xyz/pengumuman" class="btn btn-link text-secondary text-mute material-ripple" data-ripple-color="#5d8f6c">
                    <i class="fas fa-bullhorn"></i>
                </a>
            </div>
            <div class="col text-center">
                <a href="https://app-monterosa.hoverr.xyz/my-profile" class="btn btn-link text-secondary text-mute material-ripple" data-ripple-color="#5d8f6c">
                    <i class="fas fa-user"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- notification -->
<div class="notification bg-white shadow-sm border-success" style="z-index:9999">
    <div class="row">
        <div class="col-auto align-self-center pr-0">
            <i class="material-icons text-template md-36">library_books</i>
        </div>
        <div class="col">
            <h6 class="mb-0">Copied to clipboard</h6>
            <p class="mb-0 text-secondary">
                <small>Silahkan segera melakukan pembayaran.</small>
            </p>
        </div>
        <div class="col-auto align-self-center pl-0">
            <button class="btn btn-link closenotification">
                <i class="material-icons text-secondary text-mute md-18 ">close</i>
            </button>
        </div>
    </div>
</div>
<!-- notification ends -->

<div class="modal fade modal-right p-0" id="modal-detail-promo" tabindex="-1" role="dialog" aria-hidden="true" style="z-index:1051">
    <div class="modal-dialog modal-lg m-0" role="document" style="min-width:100%;height:100%">
        <div class="modal-content" style="top:0;min-height:100%;position:absolute;border-radius:0">

            <div class="modal-body" style="font-size:14px;padding-bottom:70px"></div>

            <div class="modal-footer text-left text-secondary" style="display:block;position:fixed;background:none;border:none;bottom:0;width:100%">
                <i class="fas fa-2x fa-caret-left bg-white material-ripple shadow" data-ripple-color="#fff" data-dismiss="modal" style="border-radius:50%"></i>
            </div>

        </div>
    </div>
</div><div class="modal fade p-0" id="modal-billing-detail" tabindex="-1" role="dialog" aria-hidden="true" style="z-index:1052">
    <div class="modal-dialog modal-lg m-0" role="document" style="min-width:100%;height:100%;z-index:9">
        <div class="modal-content" style="top:0;min-height:100%;position:absolute;border-radius:0">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="line-height:.9;margin: -1rem auto -1rem -1rem;">
                    <span aria-hidden="true">×</span>
                </button>
                <h6 id="total-bill-title" class="modal-title font-weight-bold text-template">
                    Total Tagihan: Rp 0                </h6>
            </div>

            <div id="list-tagihan" class="modal-body" style="padding-bottom:60px"></div>

            <div class="modal-footer text-center" style="position:absolute;border:none;bottom:0;width:100%">
                <button type="button" class="btn btn-lg btn-block btn-secondary text-white material-ripple shadow" data-ripple-color="#fff" data-dismiss="modal" style="font-size:14px;font-weight:700;border-radius:10px">
                    <b>Ok, Go Back</b>
                </button>
            </div>
            
        </div>
    </div>
</div><div class="modal fade modal-right p-0" id="invoice-detail" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg m-0" role="document" style="min-width:100%;height:100%;z-index:9">
        <div class="modal-content" style="top:0;min-height:100%;position:absolute;border-radius:0">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="line-height:.9;margin: -1rem auto -1rem -1rem;">
                    <span aria-hidden="true">×</span>
                </button>
                <h6 id="nomor-pembayaran" class="modal-title font-weight-bold"></h6>
            </div>

            <div class="modal-body" style="padding-bottom:62px">
                <div class="card border-0" style="z-index:9">
                    <div class="card-header bg-template" style="border-radius:10px">
                        <div class="row align-items-center">
                            <div id="icon-stat" class="col-auto pr-0 pl-2"></div>
                            <div class="col text-left">
                                <h6 id="nama-warga" class="font-weight-bold mb-0" style="font-size:14px"></h6>
                            </div>
                            <div class="col-auto text-right pr-2">
                                <h6 id="nomor-rumah" class="font-weight-bold mb-0" style="font-size:12px"></h6>
                                <h6 id="tgl-bayar" class="font-weight-bold mb-0" style="font-size:12px"></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="payment-notes"></div><div id="paid-invoices"></div>
                <small id="payment-notes-footer" class="text-center" style="display:block"></small>
            </div>

            <div id="payment-footer" class="modal-footer p-0" style="position:absolute;border:none;bottom:0;width:100%"></div>

        </div>
    </div>
    <div class="modal-dialog modal-lg m-0" role="document" style="min-width:100%;height:100%">
        <div class="modal-content" style="top:0;min-height:100%;position:absolute;border-radius:0">

            <div class="modal-body" style="padding-bottom:80px">

                <table class="w-100">
                    <tbody><tr>
                        <td id="va-bank-logo" class="pb-4" colspan="2">
                            <img id="bank_logo" style="top:20px;height:30px">
                        </td>
                    </tr>
                    <tr class="va-number-container">
                        <td class="pt-3">
                            <small id="bank_name" class="text-mute small text-primary" style="float:left"></small><br>
                            <input data-id="account_number" type="text" class="va-number border-0" readonly="">
                        </td>
                        <td class="pt-3 text-right">
                            <small class="text-mute small text-template">&nbsp;</small><br>
                            <button id="copy_account_number" type="button" class="btn btn-xs btn-outline-primary">Copy</button>
                        </td>
                    </tr>
                    <tr class="va-amount-container">
                        <td class="pt-2">
                            <small class="text-mute small text-primary" style="float:left">Total Tagihan</small><br>
                            <h6 id="payment_total" class="mb-0 font-weight-bold"></h6>
                            <input data-id="payment_total" type="text" class="offscreen border-0" readonly="">
                            <small class="text-mute small text-secondary" style="float:left"><span id="total_ppl"></span></small>
                        </td>
                        <td class="pt-3 text-right">
                            <small class="text-mute small text-template">&nbsp;</small><br>
                            <button id="copy_payment_total" type="button" class="btn btn-xs btn-outline-primary">Copy</button>
                        </td>
                    </tr>
                </tbody></table>

                <div class="payment-guide" id="payment_guide"></div>

            </div>

            <div class="modal-footer p-0" style="position:absolute;border:none;bottom:0;width:100%">
                <a href="javascript:;" class="btn btn-lg btn-block btn-secondary text-white w-100 material-ripple shadow" data-ripple-color="#fff" data-dismiss="modal" style="font-size:14px;font-weight:700;border-radius:0px"><b>Back</b></a>
            </div>

        </div>
    </div>
</div><form id="form-list-tagihan" autocomplete="off">
    
<input type="hidden" name="grand_total" value="0">
    <div class="modal fade p-0" id="modal-list-tagihan" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg m-0" role="document" style="min-width:100%;height:100%">
            <div class="modal-content" style="top:0;min-height:100%;position:absolute;border-radius:0">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="line-height:.9;margin: -1rem auto -1rem -1rem;">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h6 class="modal-title font-weight-bold text-template">
                        KONFIRMASI TAGIHAN
                    </h6>
                </div>

                <div id="tempe" class="modal-body" style="padding-bottom:56px">
                    <div id="card-list-tagihan"></div>
                    <div class="card border-0" style="margin-bottom:1rem">
                        <div class="card-body bg-secondary py-2 mb-3" style="border-radius:10px">
                            <table class="table table-transparent mb-0 text-white" style="font-size:12px">
                                <tbody><tr>
                                    <th class="valign-middle p-0 border-0">
                                        Grand Total
                                    </th>
                                    <th width="1" class="valign-middle p-0 border-0 text-right">
                                        Rp
                                    </th>
                                    <th width="20%" id="grand_total" class="valign-middle p-0 border-0 text-right">
                                        0                                    </th>
                                </tr>
                            </tbody></table>
                        </div>
                    </div>
                </div>

                <div class="modal-footer" style="position:absolute;bottom:0;width:100%">
                    <button type="submit" class="btn btn-lg btn-block btn-default text-white material-ripple shadow" data-ripple-color="#fff" style="font-size:14px;font-weight:700;border-radius:10px">
                        <b>BAYAR SEKARANG</b>
                    </button>
                </div>

            </div>
        </div>
    </div>
</form><div class="modal fade p-0" id="modal-prospect-form" tabindex="-1" role="dialog" aria-hidden="true" style="z-index:1052">
    <div class="modal-dialog modal-lg m-0" role="document" style="min-width:100%;height:100%;z-index:9">
        <div class="modal-content" style="top:0;min-height:100%;position:absolute;border-radius:0">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="line-height:.9;margin: -1rem auto -1rem -1rem;">
                    <span aria-hidden="true">×</span>
                </button>
                <h6 id="total-bill-title" class="modal-title font-weight-bold">
                    Form <span class="text-template">Input Data Customer</span>
                </h6>
            </div>

            <form id="form-leads" role="form" action="https://app-monterosa.hoverr.xyz/add-prospect-data" method="POST" enctype="multipart/form-data">
                
<input type="hidden" name="marketer" value="65">
                <div class="modal-body" style="padding-bottom:82px">
                    <img src="https://app-monterosa.hoverr.xyz/assets/img/mgm-gsp.jpg" alt="Member Get Member" class="w-100" style="object-fit:cover;border-radius:10px">
                    <h6 class="subtitle font-weight-bold">Personal Information</h6>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <span class="has-float-label">
                                    <input type="text" name="lead_name" value="" id="lead-name" class="form-control" placeholder="Nama Lengkap" required="required" maxlength="32">
<label for="lead-name">Nama Lengkap</label>                                </span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <span class="has-float-label">
                                    <input type="tel" name="lead_phone" value="" id="lead-phone" class="form-control phone-number" placeholder="No. Telp" pattern="^(^\+[0-9]\s?|^0)(\d{3,4}-?){2}\d{3,4}$" required="required">
<label for="lead-phone">No. Telp (08xx34567890)</label>                                </span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <span class="has-float-label">
                                    <input type="email" name="lead_email" value="" id="lead-email" class="form-control" placeholder="E-mail" required="required">
<label for="lead-email">E-mail</label>                                </span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <span class="has-float-label">
                                    <input type="text" name="lead_job" value="" id="lead-job" class="form-control" placeholder="Pekerjaan" required="required" maxlength="32">
<label for="lead-job">Pekerjaan</label>                                </span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <span class="has-float-label">
                                    <textarea name="lead_address" cols="40" rows="4" id="lead-address" class="form-control" placeholder="Alamat lengkap" required="required" style="resize:none"></textarea>
<label for="lead-address">Alamat</label>                                </span>
                            </div>
                        </div>
                    </div>

                    <h6 class="subtitle font-weight-bold">Keterangan</h6>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <span class="has-float-label">
                                    <textarea name="lead_notes" cols="40" rows="3" id="lead-notes" class="form-control" placeholder="Catatan/Keterangan Tambahan" style="resize:none"></textarea>
<label for="lead-notes">Catatan</label>                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer text-center" style="position:absolute;border:none;bottom:0;width:100%">
                    <div class="col-auto m-0 pl-0" style="padding-right:.5rem">
                        <button type="button" class="btn btn-lg btn-icon btn-block btn-secondary text-white material-ripple shadow" data-ripple-color="#fff" data-dismiss="modal" style="font-size:14px;font-weight:700;border-radius:10px;padding:.6rem 1.1rem .6rem .9rem">
                            <i class="fas fa-2x fa-caret-left"></i>
                        </button>
                    </div>
                    <div class="col m-0 pr-0" style="padding-left:.5rem">
                        <button type="submit" class="btn btn-lg btn-block bg-template text-white material-ripple shadow" data-ripple-color="#fff" style="font-size:14px;font-weight:700;border-radius:10px">
                            <b>KIRIM DATA</b>
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div><div class="modal fade modal-right p-0" id="notifications" tabindex="-1" role="dialog" aria-hidden="true" style="z-index:1051">
    <div class="modal-dialog modal-lg m-0" role="document" style="min-width:100%;height:100%">
        <div class="modal-content" style="top:0;min-height:100%;position:absolute;border-radius:0">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="font-size:1.2rem;line-height:.9;margin: -.8rem auto -1rem -1rem;">
                    <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                </button>
                <h6 class="modal-title font-weight-bold text-template">
                    NOTIFICATIONS
                </h6>
            </div>

            <div class="modal-body" style="padding-bottom:80px">
                <div class="container empty-state text-center" style="z-index:1;top:40%">
                    <img src="https://app-monterosa.hoverr.xyz/assets/img/empty-notif.svg" alt="" width="50%">
                    <h3 class="font-weight-bold mb-1">
                        Nothing <span class="text-template">to show</span>
                    </h3>
                    <p class="text-secondary text-mute">
                        You have no missed notifications.
                    </p>
                </div>
            </div>

            <div class="modal-footer" style="position:absolute;bottom:0;width:100%">
                <button type="button" class="btn btn-lg btn-block btn-secondary text-white material-ripple shadow" data-ripple-color="#fff" data-dismiss="modal" style="font-size:14px;font-weight:700;border-radius:10px">
                    <b>GO BACK</b>
                </button>
            </div>

        </div>
    </div>
</div><div class="modal fade modal-right p-0" id="modal-kritik-saran" tabindex="-1" role="dialog" aria-hidden="true" style="z-index:1052">
    <div class="modal-dialog modal-lg m-0" role="document" style="min-width:100%;height:100%;z-index:9">
        <div class="modal-content" style="top:0;min-height:100%;position:absolute;border-radius:0">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="line-height:.9;margin: -1rem auto -1rem -1rem;">
                    <span aria-hidden="true">×</span>
                </button>
                <h6 class="modal-title font-weight-bold text-template">
                    KRITIK &amp; SARAN
                </h6>
            </div>

            <form id="form_advice" role="form" action="https://app-monterosa.hoverr.xyz/send-advice" method="POST" enctype="multipart/form-data">
                <div class="modal-body" style="padding-bottom:72px">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group float-label m-0 p-0 active">
                                <textarea name="addvice" cols="40" rows="10" class="form-control" placeholder="Sampaikan kritik &amp; saran Anda untuk aplikasi PPL lebih baik." required="required" style="resize:none" maxlength="200"></textarea>
<small class="chars text-mute" style="float:right;opacity:.5">200 characters remaining</small>                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer text-center" style="position:absolute;border:none;bottom:0;width:100%">
                    <div class="col-auto m-0 pl-0" style="padding-right:.5rem">
                        <button type="button" class="btn btn-lg btn-block btn-secondary text-white material-ripple shadow" data-ripple-color="#fff" data-dismiss="modal" style="font-size:14px;font-weight:700;border-radius:10px">
                            <b>Cancel</b>
                        </button>
                    </div>
                    <div class="col m-0 pr-0" style="padding-left:.5rem">
                        <button type="submit" class="btn btn-lg btn-block btn-default text-white material-ripple shadow" data-ripple-color="#fff" style="font-size:14px;font-weight:700;border-radius:10px">
                            <b>Kirim Pesan</b>
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
            
<span id="PING_IFRAME_FORM_DETECTION" style="display: none;"></span></body></html>