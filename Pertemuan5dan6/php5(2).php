<html>
  <head>
    <title>Belajar PHP</title>
  </head>
  <body>

    <h1>Array PHP</h1>
    
    <?php

      $angka = [5,10,2,1,6];
      $kotak = array('kucing','capung','sapi', 'kambing');
      $nama  = ['Hilda', 'Windi', 'Rina'];

      //print_r($kotak);
      //echo $nama[2];

      sort($angka);
      print_r($angka);

      //echo count($nama);

    ?>

  </body>
</html>