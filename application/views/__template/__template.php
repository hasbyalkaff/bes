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
    </head>
    <body>
        <style>
            body {
                padding: 10px;
                /* font-family: 'Mulish'; */
            }
            .main {
                margin: 10px;
                margin-left: 140px;
            }
        </style>
        <?=$__sidenav?>

        <div class="main">
            <?=$__content?>
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


    </body>
</html>