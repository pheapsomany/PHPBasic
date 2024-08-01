@extends('layouts.master')
@section('content')
<h1>
    <?php
    date_default_timezone_set("Asia/Phnom_Penh");
    echo "Today Is". date("Y-M-D h:i:sa");
    ?>
</h1>

@endsection