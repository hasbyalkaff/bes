<style>
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
        

<script>
document.addEventListener("DOMContentLoaded", function(){
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