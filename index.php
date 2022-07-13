<?php
include'koneksi.php';
    
    $rows = array();
    $sql = "SELECT * from ars";
    $exc = $koneksi->query($sql);
    if ($exc->num_rows > 0) { while ($row = $exc->
fetch_assoc()){ $rows[] = $row; } };
 $koneksi->close(); 
?>

<!doctype html>
<html lang="en">
  <head>
    <title>crud mahasiswa</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
  
  <div class="w-75 container-fluid mx-auto">
    <h3>form mahasiswa</h3>
    <form action="create.php" method="POST">
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

<table class="table">
  <thead>
    <tr>
      <th scope="col">NIM</th>
      <th scope="col">NAMA</th>
      <th scope="col">JURUSAN</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($rows as $row): ?>
        <tr>
      <td><?php echo $row['nim'] ?></td>
      <td><?php echo $row['nama'] ?></td>
      <td><?php echo $row['jurusan'] ?></td>
      <td>
        <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-success">edit</a>
        <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">delete</a>
      </td>
    </tr>
    
    <?php endforeach; ?>
    
  </tbody>
</table>
  </div>









    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>