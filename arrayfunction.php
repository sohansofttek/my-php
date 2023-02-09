<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arraay functions</title>
</head>
<body>
    <?php 
    
    $s = array(3,2,4,6,7);
    $r = array("i","love","bangladesh",2,7,5,array("aa","bb","cc"),"rahman",3,array("i","love","php"));
    $r [9][]="learning";
    $r [6][]="Md Sohanur Rahman";

   // echo $r;
   echo "<pre>";
   print_r ($r);
   echo "</pre>";
    echo $r[6][2];

    //echo "<pre>";
   // print_r ($s);
    //print_r ($r);
   // echo "</pre>";
    
    
    
    
    
    
    
    
    
    
    ?>






</body>
</html>