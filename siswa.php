<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/index.css">
</head>
  <body>
    <!-- Array -->
  <?php
  $dt_siswa =   [["no"=> "1","nis" => "12345","nama" => "Susi", "nilai" => "80"],
              ["no"=> "2","nis" => "67891","nama" => "Tono", "nilai" => "70"]];

  ?>


    <!-- Banner -->
    <section class="bg-banner py-3 w-100 border-bottom">
    <div class="d-flex flex-lg-row  align-items-center justify-content-center">
        <h5 class="mb-0 title-banner me-3"> Data Siswa</h5>
        
    </div>
    </section>
    

    <!-- Benefit -->
    <div class="container px-5 mt-10">
        
    <table class="table mt-5 text-center">
  
  <thead class = "table-dark text-center">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nis</th>
      <th scope="col">Nama</th>
      <th scope="col">Keterangan</th>
    </tr>
    
  </thead>
  <tbody>
  <?php
  foreach ($dt_siswa as $ssw): ?>
    <tr>
      <th scope="row"><?php echo $ssw["no"]; ?></th>
      <th scope="row"><?php echo $ssw["nis"]; ?></th>
      <th scope="row"><?php echo $ssw["nama"]; ?></th>
      <td>
      
        <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Lihat
      </button>

      
      </td>
    </tr>
    <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Keterangan</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
          <div class="modal-body text-center">
        
        <?php
        $nilai= $ssw ["nilai"];
        if( $nilai > 75 ){
        echo "SELAMAT ANDA LULUS ! <br>";
        echo "NILAI ANDA" . " " . $ssw["nilai"];
  
        } else{
        echo "MAAF ANDA TIDAK LULUS";
        echo "NILAI ANDA" . " " . $ssw["nilai"];
        }
        
        ?>


        </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <a href="index.php" target="_blank"> <button type="button" class="btn btn-primary">Home</button> </a>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach ?>
     </tbody>
</table>
</div>

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
  
 