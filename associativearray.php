<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>associative array</title>
</head>
<body>
    <?php 
    $s = ["name"=>"sohan","age"=>25,"city"=>"dinajpur","friends"=>array("mango"=>"lichu","banana"=>"coconut")];
    echo $s["name"];
    echo "<br>";
    echo $s["friends"]["mango"];
    echo"<br>";
    $s =[1,2,3,4,5,array(0,9,10,array(9,8,7,6,array(22,23,24,25)))];
    echo $s [5][3][4][3];
    echo"<pre>";
    print_r($s);
    echo"</pre>";
    
    
    
    ?>
</body>
</html>