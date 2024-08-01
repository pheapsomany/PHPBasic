@extends('layouts.master')
@section('content')
    <h1>
        PHP Array
    </h1>
    <?php
    $color = "red";
    $city = array("Phnom Penh","Siem Reap","Kampot");
    echo $city[0];
    foreach ($city as $mycity) {
       ?>
       <div class="box">
        <?php echo $mycity; ?>
       </div>
       <?php
    }
    ?>
    <h1>
        php Array 2
    </h1>
    <?php 
    $year = array("php"=>"1995","asp"=>"2002","jsp"=>"1999");
    ?>
    <h1>
        <?php echo $year['jsp'] ?>
    </h1>
    <?php
    foreach ($year as $key =>$val) {
       ?>
       <div class="box">
        <?php echo $key. '='. $val; ?>
       </div>
       <?php
    }
    ?>
    <h1>
        PHP Array 3
    </h1>
    <?php
    $menu = array(
        array("Name"=>"Apple","color"=>"red"),
        array("Name"=>"Google","color"=>"yellow"),
        array("Name"=>"Meta","color"=>"blue"),
    );
    ?>
    <h1>
        <?php echo $menu[2]['color']; ?>
    </h1>
    <?php
    foreach($menu as $val){
        ?> 
        <div class='box'>
            <?php echo $val['Name']; ?>
        </div>
        <?php
    }
    ?>
@endsection