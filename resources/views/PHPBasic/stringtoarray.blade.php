@extends('layouts.master')
@section('content')
   <h1>
    <?php 
    echo "String To Array";
    ?>
   </h1>
   <h1>
      <?php 
     $str = "Apple,Google,Meta,Amazon";
     $myStr = explode(",",$str);
     echo $myStr[2];
     ?>
     </h1>
     <?php 
     $myImg = "1.jpg 2.jpg 3.jpg 4.jpg 5.jpg 6.jpg 7.jpg 8.jpg";
     $img = explode(" ",$myImg);
     foreach ($img as $val) {
     ?>
     <div class="img-box">
      <img src="img/<?php echo $val ?>" alt="">
     </div>
     <?php
     }
     ?>
@endsection