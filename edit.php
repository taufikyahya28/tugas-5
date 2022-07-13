<?php
    include 'koneksi.php';
 $id         = $_GET['id'];
 $select  = mysqli_query($koneksi, "select * from ars where id='$id'");
 $row        = mysqli_fetch_array($select);
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
  <div class="w-75 container-fluid mx-auto">
    <h3>form mahasiswa</h3>
    <form action="update.php" method="POST">
    <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
  <div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input type="text" class="form-control" id="nim" name="nim" />
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">nama</label>
    <input type="text" class="form-control" id="nama" name="nama" />
  </div>
  <div class="mb-3">
    <label for="jurusan" class="form-label">jurusan</label>
    <input type="text" class="form-control" id="jurusan" name="jurusan"/>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>