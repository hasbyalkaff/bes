<!doctype html>
<html lang="en">
    <head>
        <meta charset="UtF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bank Economic System</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?=base_url('assets/bootstrap-5.2.2-dist/css/bootstrap.min.css')?>" type="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
        <style>
            /* .container {
                width: 70%;
                margin: 15px auto;
            }
            body {
                text-align: center;
                color: green;
            }
            h2 {
                text-align: center;
                font-family: "Verdana", sans-serif;
                font-size: 30px;
            } */
        </style>
    </head>
    <body>
        <style>
            body {
                padding: 10px;
                /* font-family: 'Mulish'; */
            }
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
            .main {
                margin: 10px;
                margin-left: 140px;
            }
            .yellow-card{
                border-radius: 10px;
                background-color: #FFB001 !important;
            }
            .white-card{
                border-radius: 10px;
                background-color: white !important;
                color: black;
                margin: 8px;
            }
            .myCard {
                color: white;
                background-color: #140035 !important;
                border-radius: 10px;
                margin-top: 10px;
                margin-right: 0;
                margin-bottom: 10px;
            }
            .date-space {
                display: flex;
                justify-content: space-between;
            }
            .date-space select {
                border:none;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                -ms-appearance: none; /* get rid of default appearance for IE8, 9 and 10*/
                background-color: unset;
                color: white;
                text-align: center;
                text-align-last: center;
            }
            .date-to {
                font-size: 12px;
                padding: 5px;
            }
            .top-header {
                font-size: 13px;
            }
            .top-value {
                font-size: 24px;
            }
            .mid-header {
                font-size: 14px;
            }
            .mid-value {
                font-size: 32px;
            }
            .toggle-button .btn{
                color: #140035;
                border-radius: 50px;
                border-color: #140035;
                width: 100px;
            }
            .toggle-button .btn:hover{
                color: white;
                background-color: grey !important;
            }
            .toggle-button .active{
                color: #F0FDF4 !important;
                background-color: #140035;
                pointer-events: none;
            }
            .myChart canvas{
                /* height: -webkit-fill-available !important; */
            }
            .dropdown-menu {
                color: white;
                background-color: #140035;
                border-radius: 25px;
                padding: 10px 30px;
            }
            .dropdown-item {
                color: white;
            }
            .dropdown-item:hover {
                background-color: #FFB001;
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

        <div class="main">
            <div class="container" style="display: contents">
                <div class="row">
                    <div class="col-9">
                        <div class="row">
                            Assalamualaikum Rian Inu Kertapati!
                        </div>
                        <div class="row myCard">
                            <div class="col-4 p-3">
                                <div style="float:left; margin-right: 10px">
                                    <img src="<?=base_url('assets/img/bi_people-fill.png')?>" height="50px"/>
                                </div>
                                <div style="myTop">
                                    <div class="top-header">Data Anggota</div>
                                    <div class="top-value">2500</div>
                                </div>
                            </div>
                            <div class="col-4 p-3">
                                <div style="float:left; margin-right: 10px">
                                    <img src="<?=base_url('assets/img/uil_transaction.png')?>" height="50px"/>
                                </div>
                                <div style="">
                                    <div class="top-header">Transaksi Harian</div>
                                    <div class="top-value">2500</div>
                                </div>
                            </div>
                            <div class="col-4 p-3">
                                <div style="float:left; margin-right: 10px">
                                    <img src="<?=base_url('assets/img/dashicons_money-alt.png')?>" height="50px"/>
                                </div>
                                <div style="">
                                    <div class="top-header">Jumlah Uang di Rekening</div>
                                    <div class="top-value">2500</div>
                                </div>
                            </div>
                        </div>
                        <div class="row myCard p-2">
                                <div>Stats Info</div>
                                <div class="col-3 white-card">
                                    <div class="mid-header">Anggota Aktif</div>
                                    <div style="float:left; margin-right: 10px">
                                        <img src="<?=base_url('assets/img/bi_people-fill-2.png')?>" height="50px"/>
                                    </div>
                                    <div style="">
                                        <div class="mid-value">100</div>
                                    </div>
                                </div>
                                <div class="col-3 white-card">
                                    <div class="mid-header">Anggota Non Aktif</div>
                                    <div style="float:left; margin-right: 10px">
                                        <img src="<?=base_url('assets/img/bi_people-fill-3.png')?>" height="50px"/>
                                    </div>
                                    <div style="">
                                        <div class="mid-value">100</div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-3 px-0">
                        <div class="yellow-card p-3">
                            <div class="row">
                                <div class="col-12 dropdown">    
                                    <div class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="<?=base_url('assets/img/Ellipse_1.png')?>" height="40px"/>
                                        Rian Inu Kertapati
                                    </div>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">
                                            <img src="<?=base_url('assets/img/bi_people-fill.png')?>" height="20px"/>
                                            Data Anggota
                                        </a></li>
                                        <li><a class="dropdown-item" href="#">
                                            <img src="<?=base_url('assets/img/material-symbols_power-rounded.png')?>" height="20px"/>
                                            Keluar
                                        </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col myCard mx-4">
                                    <div class="date-space">
                                        <div>
                                            <select>
                                                <?php for($i=1;$i<32;$i++):?>
                                                    <option><?=$i?></option>
                                                <?php endfor; ?>
                                            </select>
                                        </div>
                                        <div>
                                            <select>
                                                <option>JANUARY</option>
                                                <option>FEBRUARY</option>
                                                <option>MARCH</option>
                                                <option>APRIL</option>
                                                <option>MEI</option>
                                                <option selected>JUNE</option>
                                                <option>JULY</option>
                                                <option>AUGUST</option>
                                                <option>SEPTEMBER</option>
                                                <option>OCTOBER</option>
                                                <option>NOVEMBER</option>
                                                <option>DECEMEBR</option>
                                            </select>
                                        </div>
                                        <div>
                                            <select>
                                                <option>2021</option>
                                                <option>2022</option>
                                                <option>2023</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="text-center date-to">
                                        TO
                                    </div>
                                    <div class="date-space">
                                        <div>
                                            <select>
                                                <?php for($i=1;$i<32;$i++):?>
                                                    <option><?=$i?></option>
                                                <?php endfor; ?>
                                            </select>
                                        </div>
                                        <div>
                                            <select>
                                                <option>JANUARY</option>
                                                <option>FEBRUARY</option>
                                                <option>MARCH</option>
                                                <option>APRIL</option>
                                                <option>MEI</option>
                                                <option>JUNE</option>
                                                <option>JULY</option>
                                                <option>AUGUST</option>
                                                <option selected>SEPTEMBER</option>
                                                <option>OCTOBER</option>
                                                <option>NOVEMBER</option>
                                                <option>DECEMEBR</option>
                                            </select>
                                        </div>
                                        <div>
                                            <select>
                                                <option>2021</option>
                                                <option>2022</option>
                                                <option>2023</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-2">
                                <div class="col-12 myCard mb-1 mt-1">
                                    <div style="float:right; line-height: 49.4px">
                                        <img src="<?=base_url('assets/img/charm_sign-out.png')?>" height="40px"/>
                                    </div>
                                    <div style="">
                                        <div>Kas Keluar</div>
                                        <div>Rp. 15.000.000,-</div>
                                    </div>
                                </div>
                                <div class="col-12 myCard mb-1 mt-0">
                                    <div style="float:right; line-height: 49.4px">
                                        <img src="<?=base_url('assets/img/bytesize_sign-in.png')?>" height="40px"/>
                                    </div>
                                    <div style="">
                                        <div>Kas Masuk</div>
                                        <div>Rp. 15.000.000,-</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->

                <div class="row">
                    <div class="col-12 toggle-button">
                        <button class="btn btn-outline-primary active" type="radio" id="btnLine">Grafik</button>
                        <button class="btn btn-outline-primary" type="radio" id="btnBar">Bar</button>
                    </div>
                    <div class="col-12 py-3">
                        <div class="myChart">
                            <canvas id="myChart" height="85%"></canvas>
                        </div>
                    </div>
                </div>
            </div> <!-- container -->
        </div>

        <!-- ✅ load popper.js ✅ -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
            crossorigin="anonymous"
            ></script>
        <!-- Bootstrap JS -->
        <script src="<?=base_url('assets/bootstrap-5.2.2-dist/js/bootstrap.min.js')?>" type="text/javascript" ></script>
        <!-- jQuery -->
        <script src="<?=base_url('assets/jquery.development/jquery-3.6.1.js')?>" type="text/javascript" ></script>


        <script>
        $(document).ready(function(){
            var graphType = "bar";

            var ctx = document.getElementById("myChart").getContext("2d");
            var gradient = ctx.createLinearGradient(0, 0, 0, 400);
            gradient.addColorStop(0, '#FFB001');   
            gradient.addColorStop(1, '#D9D9D9');

            var config = {
                type: "line",
                options: {
                    legend: {
                        display: false
                    }
                },
                data: {
                    labels: [
                        "Monday",
                        "Tuesday",
                        "Wednesday",
                        "Thursday",
                        "Friday",
                        "Saturday",
                        "Sunday",
                    ],
                    datasets: [
                        {
                            label: "Members",
                            data: [2, 9, 3, 17, 6, 3, 7],
                            backgroundColor: gradient,
                            borderColor: "#140035",
                            strokeColor: "#9CA3AF"
                        }
                    ],
                },
            };
            var myChart = new Chart(ctx, config);

            $("#btnLine").click(() => {
                config.type = "line";
                myChart = new Chart(ctx, config);
                $("#btnBar").removeClass("active");
                $("#btnLine").addClass("active");
            });
            
            $("#btnBar").click(() => {
                config.type = "bar";
                myChart = new Chart(ctx, config);
                $("#btnLine").removeClass("active");
                $("#btnBar").addClass("active");
            });
        });
        </script>
    </body>
</html>