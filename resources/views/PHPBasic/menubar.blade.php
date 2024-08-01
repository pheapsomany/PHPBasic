@extends('layouts.master')
@section('content')
    <?php
    $mymenu = array(
        array("Name"=>"Apple","color"=>"orange",'url'=>"https://www.apple.com/"),
        array("Name"=>"Amazon","color"=>"blue",'url'=>"https://www.amazon.com"),
        array("Name"=>"Microsoft","color"=>"pink",'url'=>"https://www.microsoft.com"),
        array("Name"=>"Google","color"=>"yellow",'url'=>"https://www.google.com"),
);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <div class="menu-bar">
            <ul>
                <li>
                   <?php 
                   foreach ($mymenu as $menu) {
                    ?>
                    <li>
                        <a href="<?php echo $menu['url']; ?>" style="color: <?php echo $menu['color']; ?>">
                            <?php echo $menu['Name'];?>
                        </a>
                    </li>
                   <?php
                   }
                   ?>
                </li>
            </ul>
        </div>
    </body>
    </html>
@endsection