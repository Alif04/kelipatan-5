<?php
	if (isset($_POST['submit'])) {
		$nilai = $_POST['nilai'];
		$lipat = $_POST['lipat'];
 	}
?>
<!doctype html>
<html lang="en"> 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas Kelipatan</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style> 
      .bg-1{
        background-color:#AC7088;
        }

       body{
        background-color:rgb(245, 232, 199);
       } 
       .card{
        background-color:rgb(222, 182, 171);
       }
       .tombol{
        background-color:rgb(172, 112, 136);
       }
       .bg-2{
       background-color: rgb(172, 112, 136);
       }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="card col-4 offset-4 mt-5" data-aos="fade-down" data-aos-duration="1500">
        <div class="card-header bg-2 text-center rounded-2">    
          <h1 class="text-white">Kelipatan</h1>
        </div>
            <form action="" method="post" class="col-10 offset-1 ">
                <label class="mt-3 text-white">Masukkan Nilai:</label>
                <input type="number" class="form-control mt-2" name="nilai" placeholder="Masukkan Nilai">
                <label class="mt-3 text-white">Masukkan Angka Kelipatan:</label>
                <input type="number" class="form-control mt-2" name="lipat" placeholder="Masukkan Nilai">
                <button type="submit" name="submit" class="btn tombol my-3 text-white col-12">Submit</button>

            </form>
        </div>
        <div class="mt-4">
        <?php   
            		for ($i= 1; $i <= @$nilai; $i++) { 
                        if ( $bagi = $i % $lipat == 0 ) {        ?>  
                        
                            <p class="text-center bg-1 col-4 offset-4 py-2 rounded-3 text-white" data-aos="zoom-in-down" data-aos-duration="1500">Kelipatan nilai <?= $lipat ?> dari nilai <?= $nilai ?> adalah  <?= $i ?> </p>  
        <?php
                        }
                    } 
        ?>
        </div>
                                          
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
  </body>
</html>

   



