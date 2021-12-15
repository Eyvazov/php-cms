<?php

if ($_POST){
    $arr= json_decode($_POST['data'], true);
   print_r( $arr[0]['text'] );
   exit();
}

require admin_view('add-menu');

?>