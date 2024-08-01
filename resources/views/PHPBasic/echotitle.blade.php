@extends('layouts/master')
@section('content')
  <?php
  $total = 50;
  if( $total >= 50){
    ?> 
    <h2 style="color: red;">Ok!</h2>
    <?php
  }
  else if($total <50){
    ?>
    <h1>No!</h1>
    <?php
  }
  ?>
@endsection