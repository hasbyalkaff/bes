<style>
    .navbar {
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        margin: 20px 20px;
        width: 100px;
        background-color: #140035 !important;
        border-radius: 14px;
        padding: 40px 2px;
    }
    .nav-link {
        font-style: normal;
        font-weight: 700;
        font-size: 10px;
        color: #DDDDDD !important;
        line-height: 15px;
        margin: 0;
        padding-left: 0 !important;
        padding-right: 0 !important;
    }
    .nav-link img {
        height: 30px;
        width: 30px;
        filter: grayscale(100%) invert(99%) sepia(0%) saturate(2087%) hue-rotate(77deg) brightness(115%) contrast(73%);
    }
    .navbar a:hover {
        background-color: #000090;
        border-radius: 14px;
    }
    .active {
        color: #FFB001 !important;
    }
    .active img{
        filter: grayscale(100%) invert(74%) sepia(23%) saturate(7444%) hue-rotate(2deg) brightness(110%) contrast(102%);
    }
</style>
<nav class="navbar navbar-expand-lg bg-light text-center">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="<?=base_url('assets/img/ic_round-dashboard.png')?>"/>
                        <br />Beranda
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <img src="<?=base_url('assets/img/bi_people-fill.png')?>"/>
                        <br />Data Anggota
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="<?=base_url('assets/img/description_black_24dp 1.png')?>"/>
                        <br />Data Rekening
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="<?=base_url('assets/img/uil_transaction.png')?>"/>
                        <br />Transaksi Teller
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="<?=base_url('assets/img/carbon_network-public.png')?>"/>
                        <br />Transaksi Umum
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="<?=base_url('assets/img/arcticons_simpleaccounting.png')?>"/>
                        <br />Akutansi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="<?=base_url('assets/img/bi_clipboard-data-fill.png')?>"/>
                        <br />Otomasi Data
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="<?=base_url('assets/img/fluent_print-16-filled.png')?>"/>
                        <br />Cetak Data
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="<?=base_url('assets/img/heroicons-solid_document-report.png')?>"/>
                        <br />Laporan
                    </a>
                </li>
            </ul>
        </div>

    </div>
</nav>