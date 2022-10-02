<?php
  require 'Pegawai.php';
  
  //instance object
  $p1 = new Pegawai('0001', 'Rasyidi', 'Manager', 'Islam', 'Belum Menikah');
  $p2 = new Pegawai('0002', 'Muhammad', 'Staff', 'Islam', 'Belum Menikah');
  
  //panggil fungsi
  echo '<h3 align="center">'.Pegawai::PT.'</h3><br />';
  $p1->mencetak();
  $p2->mencetak();
?>