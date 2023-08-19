<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 
    <title>Add Product</title>
  </head>
  <body style="background-image: url(https://cdn.discordapp.com/attachments/1045725173728419840/1059830576598745218/bg-awal.png); background-size: cover;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white p-3">
      <div class="container-fluid">
        <a class="navbar-brand" href="http://localhost/travelight/public/products">
          <img src="https://cdn.discordapp.com/attachments/1045725173728419840/1057811599928332439/image.png" alt="" style="height: 60px; width: 200px">
        </a>
        <div class="navbar-collapse">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <p class="text-center text-white" style="font-size: xx-large;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
              Add Hotel
              </p>
            </li>
          </ul>
        </div>
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item dropdown">
              <a class="nav-link mx-2" href="http://localhost/travelight/public/products/add">Add Product </a>
            </li>
            <li>
              <a class="nav-link mx-2" href="<?= base_url('/ownerorders'); ?>">List Pesanan </a>
            </li>
            
            <li>
              <a class="nav-link mx-2" href="<?= base_url('/logout'); ?>">Logout </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<div class="container">
  <br>
  <div class="row justify-content-md-center">
    <div class="col-6 mx-auto">
      <div class="card shadow border">
        <div class="card-body d-flex flex-column"> <?php if(isset($validation)):?> <div class="alert alert-danger"> <?= $validation->listErrors() ?> </div> 
            <?php endif;?> 
            <form action="<?= base_url('/products/add/save') ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="InputForName" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="InputForName">
            </div>
            <div class="mb-3">
              <label for="InputForLocation" class="form-label">Location</label>
              <input type="text" name="location" class="form-control" id="InputForLocation">
            </div>
            <div class="mb-3">
              <label for="InputForDesc" class="form-label">Description</label>
              </br>
              <textarea name="desc" id="InputForDesc"></textarea>
            </div>
            <div class="mb-3">
              <label for="InputForUrlGbr" class="form-label">Add Hotel Picture</label>
              <input type="file" name="urlGambarHotel" class="form-control" id="InputForUrlGbr">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
            <button class="btn btn-secondary" onclick="history.back()">Back</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
    
     
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

  </body>
</html>