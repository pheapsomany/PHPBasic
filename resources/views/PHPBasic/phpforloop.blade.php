@extends('layouts.master')
@section('content')
<h1>
   <h1>
    <?php
    for ($i=0; $i < 50; $i++) { 
       ?>
       <div class="box">
        <?php echo $i; ?>
       </div>
       <?php
    }
    ?>
   </h1>
</h1>
@endsection