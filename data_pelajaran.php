<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISTEM INFORMASI SISWA</title>
    <link rel="stylesheet" href="src/css/data_pelajaran.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
 
<!--BANNER-->  
    <div class="bg-banner py-3 d-flex align-item-center justify-content-center border-bottom">
        <h5 class="mb-0 title-banner me-3">DATA PELAJARAN SISWA</h5>
    </div>


<!-- Array -->
<?php
  $dt_matpel =   [["no"=> "1","kode" => "10001","matpel" => "Sistem Komputer", "kelas" => "xi", "keterangan" => "BOS 2021"],
                  ["no"=> "2","kode" => "10002","matpel" => "PKK", "kelas" => "xi", "keterangan" => "BOS 2021"],
                  ["no"=> "3","kode" => "10003","matpel" => "PKK", "kelas" => "xii", "keterangan" => "BOS 2021"],
                  ["no"=> "4","kode" => "10004","matpel" => "Pemrograman WEB", "kelas" => "xi", "keterangan" => "BOS 2021"],
                  ["no"=> "5","kode" => "10005","matpel" => "Informatika", "kelas" => "xi", "keterangan" => "BOS 2021"],
                  ["no"=> "6","kode" => "10006","matpel" => "Matematika", "kelas" => "xi", "keterangan" => "BOS 2021"],
                  ["no"=> "7","kode" => "10007","matpel" => "Design grafis", "kelas" => "xi", "keterangan" => "BOS 2021"]];

  ?>
<!--content-->
    
  <div class="container px-5 mt-10">
     
 <table class="table mt-5 text-center">

<thead class = "table-dark text-center">
 <tr>
   <th scope="col">No</th>
   <th scope="col">Kode</th>
   <th scope="col">Mata Pelajaran</th>
   <th scope="col">Kelas</th>
   <th scope="col">Keterangan</th>
 </tr>
 
</thead>
<tbody>

<?php
foreach ($dt_matpel as $ssw): ?>
 <tr>
   <th scope="row"><?php echo $ssw["no"]; ?></th>
   <th scope="row"><?php echo $ssw["kode"]; ?></th>
   <th scope="row"><?php echo $ssw["matpel"]; ?></th>
   <th scope="row"><?php echo $ssw["kelas"]; ?></th>
   <th scope="row"><?php echo $ssw["keterangan"]; ?></th>
</tr>

</tbody>
   </div> 
   <?php endforeach ?>

<section>
  <div class="back  py-3 w-100 ">
    <a href="index.php" class="d-flex flex-lg-row justify-content-center align-items-center">
    <button class ="btn btn-primary" >Kembali</button> </a>
  </div>
</section>

<!-- Footer -->
<div class="border-top py-4 mt-10 ">
            <div class="container px-5 d-flex flex-lg-row flex-column justify-content-between align-items-center">
            <img src="src/img/Upo-Djiwo.png" alt="" class="d-lg-block d-none">
            <img src="src/img/UpoD-jiwo.png" alt="" class="d-lg-none d-block mb-4" style="width: 8rem;">
            <div class="d-flex flex-column flex-lg-row">
                <p class="me-3 text-decoration-none text-secondary mb-0">@All Right Reserved. UpoDjiwo</p>
                
              </div>
          </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>