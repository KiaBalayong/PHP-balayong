<?php
    include 'functions.php';

    if(isset($_GET['find'])){
     
        $triangle1 = intval($_GET['triangle1']);
        $triangle2 = intval($_GET['triangle2']);

        echo "<h3> Output: " . third_side($triangle1, $triangle2) . "</h3>";
    }




  
    if(isset($_GET['count'])){
   
        $num = intval($_GET['num']);

        echo "<h3> Output: " . countAllOnes($num) . "</h3>";
    }




    if (isset($_GET['submit'])) {
        $srate = $_GET['srate'];
        $prate = $_GET['prate'];

        echo "<h3> Output: " . separate($srate, $prate) . "</3>";

    }



    if(isset($_GET['sastry'])){

        $num = intval($_GET['num']);

        echo "<h3> Output: " . isSastry($num) . "</h3>";
    }

    ?>