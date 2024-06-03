<?php
include "koneksi.php";
$Q = mysqli_query($koneksi, "select count(kabupaten_kota) as ta FROM `titik_api`")or die(mysqli_error());
if($Q){
 $posts = array();
      if(mysqli_num_rows($Q))
      {
             while($post = mysqli_fetch_assoc($Q)){
                     $posts[] = $post;
             }
      }  
      $data = json_encode(array('results'=>$posts));             
}
