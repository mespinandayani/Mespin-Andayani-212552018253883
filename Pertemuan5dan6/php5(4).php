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

      //sort($angka);
      //print_r($angka);

      //echo count($nama);

      //-----Assosiative Array-----
      //key =>isi

      $data = array( "nama" => "Rika",
                     "umur" => 25,
                     "kerja"=> "Pegawai"
                   );

      $data2 = array( "suami" => "belum ada",
                     "laptop" => "ASUS",
                   );

      //print_r($data);
      //$data['nama'] = "Rika Wulandari";
      //echo "Nama adalah ", $data['nama'];

      //-----Metode Associative Array-----
      print_r(array_values($data));

    ?>

  </body>
</html>