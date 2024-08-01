@extends('layouts.master')
@section('content')
<?php
    $x=1;
    while ($x < 50) {
        ?>
        <div class='box'>
            <?php
                echo $x;
            ?>
        </div>
        <?php
        $x++;
    }
    ?>
@endsection