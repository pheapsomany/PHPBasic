@extends('layouts.master')
@section('content')
    <?php
    $colors = array("black","red","green","blue","yellow","pink");
   foreach ($colors as $x){
    ?>
    <div class='box' style="background-color:<?php echo $x; ?>">
        <?php 
        echo $x;    
        ?>
    </div>
    <?php
   }
    ?>
@endsection
