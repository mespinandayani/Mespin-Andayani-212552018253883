<html>
  <head>
    <title>Belajar PHP</title>
  </head>
  <body>

    <h1>Array PHP</h1>
    
    <?php

      //-----Tipe Data Array-----
      $angka = [5,10,2,1,6];
      $kotak = array('kucing','capung','sapi', 'kucing');
      $nama  = ['Hilda', 'Windi', 'Rina'];

      //echo($kotak);
      //echo $nama[2];

      //-----Metode Array-----    
      //array_unique, _reverse, shuffle, count, sort
      //sort($angka);
      //shuffle($kotak);
      //print_r($angka);

      //echo count($kotak);

      //-----Assosiative Array-----
      //key =>isi

      $data = array(  "nama" => "Rika",
                      "umur" => 25,
                      "kerja"=> "Pegawai"
               );
    
      //$data2 = array( "suami" => "belum ada",
            //         "laptop" => "ASUS",
            //  );

      //print_r($data);
      //$data['nama'] = "Rika";
      // echo "Nama adalah ", $data['nama'];

      //-----Metode Associative Array-----
      //array_values, array_keys, array_merge
      // print_r(array_merge($data,$data2,$data3));

      //-----Multi Dimensi Array-----

      //$data = array( 
      //          array("progammer", "25","males"),
       //         array("designer", "25", "rajin"),
       //         array("manager", "35", "males banget"),
        //      );

      //00 01 02
      //10 11 12
      // 20 21 22

      //$data[2][0] = "proyek manager";
      //echo $data[2][0];
    ?>

  </body>
</html>
