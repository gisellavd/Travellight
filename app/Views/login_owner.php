<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 
    <title>Login</title>
  </head>
  <body style="background-image: url(https://cdn.discordapp.com/attachments/1045725173728419840/1059830576598745218/bg-awal.png); background-size: cover;">
        <div class="container">
            <img class="rounded float-left mt-4 mb-5" src="../../public/assets/img/logo-tvl.png" alt="" style="height: 60px; width: 200px">
            <div class="row justify-content-md-center">
                <div class="col-6 mx-auto">
                    <div class="card shadow border">
                        <div class="card-body d-flex flex-column">
                            <h2 class="mb-3">Login as Hotel Owner</h2>
                            <?php if(session()->getFlashdata('msg')):?>
                                <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                            <?php endif;?>
                            <form action="owner/owner_auth" method="post">
                                <div class="mb-3">
                                    <label for="InputForEmail" class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control" id="InputForUsername" value="<?= set_value('username') ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="InputForPassword" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="InputForPassword">
                                </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-2">Login</button>
                    </div>
                    </form>
                    <p class="text-white">Belum punya akun? <a href="http://localhost/travelight/public/signup/owner">Daftar</a></p>
                </div>
            </div>
        </div>
    </div>
     
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>