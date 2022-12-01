<!doctype html>
<html lang="en">
    <head>
        <meta charset="UtF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bank Economic System</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?=base_url('assets/bootstrap-5.2.2-dist/css/bootstrap.min.css')?>" type="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

        <style>
            body{
                background-color: #140035;
                padding: 10px;
            }
            .card {
                border-radius: 25px;
            }
            input {
                outline: 0 !important;
                border-width: 0 0 2px !important;
                border-radius: 0 !important;
            }
            input:focus{
                border-color: #FFB001 !important;
                box-shadow: none !important;
            }
            input:focus +  span{
                border-color: #FFB001 !important;
            }
            .input-group span{
                background-color: inherit;
                outline: 0 !important;
                border-width: 0 0 2px !important;
                border-radius: 0 !important;
            }
            button{
                background-color: #FFB001 !important;
                border-color: #FFB001 !important;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-md-center align-items-center" style="height: -webkit-fill-available;">

                <div class="col-6 left-side" style="padding: 4% 0;">
                    <img src="<?=base_url('assets/img/login.png')?>" style="height: -webkit-fill-available;"/>
                </div>

                <div class="col-4 right-side" style="background-color: ">
                    <div class="card">
                        <div class="card-body" style="padding: 40% 10%">
                            <form>
                                <div class="input-group mb-3">
                                    <input id="usrnm" class="form-control" type="text" placeholder="Username" aria-label="Username" />
                                    <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                                    <div id="usrnm-invalid" class="invalid-feedback"></div>
                                </div>
                                <div class="input-group mb-4">
                                    <input id="pass" class="form-control" type="password" placeholder="Password" aria-label="Password" />
                                    <span class="input-group-text"><i id="showPwd" class="bi bi-eye-fill"></i></span>
                                    <div id="pass-invalid" class="invalid-feedback"></div>
                                </div>
                                <div class="d-grid gap-2 col-10 mx-auto">
                                    <button id="sbmt" class="btn btn-primary" type="button">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="<?=base_url('assets/bootstrap-5.2.2-dist/js/bootstrap.min.js')?>" type="text/javascript" ></script>
        <!-- jQuery -->
        <script src="<?=base_url('assets/jquery.development/jquery-3.6.1.js')?>" type="text/javascript" ></script>

        <script>
        $(document).ready(function(){
            $("#showPwd").click(() => {
                switch ($("#pass").attr('type')){
                    case "password": $("#pass").attr('type', "text"); break;
                    case "text": $("#pass").attr('type', "password"); break;
                }
                $("#showPwd").toggleClass('bi-eye-fill bi-eye-slash-fill');
            });
            
            $("#sbmt").click(() => {
                var username = $("#usrnm").val();
                var password = $("#pass").val();

                var user_alert = $("#usrnm-invalid");
                var pass_alert = $("#pass-invalid");

                user_alert.css('display', 'none');
                pass_alert.css('display', 'none');

                if(!username){ user_alert.html('Username wajib diisi'); user_alert.css('display', 'inline'); }
                else if(!password){ pass_alert.html('Password wajib diisi'); pass_alert.css('display', 'inline'); }
                else if(username == "admin" && password == "123"){ alert('benar'); }
                else{ pass_alert.html('Username atau Password salah'); pass_alert.css('display', 'inline'); }
            });
        });
        </script>
    </body>
</html>