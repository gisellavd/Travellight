<!doctype html>
<html> 
    <head> 

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>


        <title>Landing Page</title>
    </head>
    <body style="background-image: url(https://cdn.discordapp.com/attachments/1045725173728419840/1059830576598745218/bg-awal.png); background-size: cover;">
            <center>
            </br>

            <?php if(session()->getFlashdata('gagal')):?>
            <div class="alert alert-danger"><?= session()->getFlashdata('gagal') ?></div>
            <?php endif;?>
            
                <img src="assets/img/logo-tvl.png" alt="" style="height: 150px">

                <h3 class="text-white pt-5">Log In</h3>
                </br>
                <button type="button" class="btn btn-primary center-block" onclick="location.href='http://localhost/travelight/public/login/customer';">As Customer</button>
                </br>
                </br>
                <button type="button" class="btn btn-primary center-block" onclick="location.href='http://localhost/travelight/public/login/owner';">As Hotel Owner</button>
                </center>
        </div>
        <!-- Popper.js first, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    </body>
</html>