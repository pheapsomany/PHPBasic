<h1>
    <?php
    if (isset($_POST['txt-post'])) {
        $myname = $_POST['txt-name'];
        $file = $_FILES['txt-file'];
        echo $file['name'];
    }else {
       echo "No Action";
    }
    ?>
</h1>