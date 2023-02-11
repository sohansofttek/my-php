<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array function2</title>
</head>
<body>
    <?php 
    
    $s =[2,4,3,5,7,9,6];

    echo "<pre>";
    print_r($s);
    sort($s);
    print_r($s);
    rsort($s);
    print_r($s);
    echo "</pre>";
    
    
    
    echo "count :" .count($s);
    echo "<br>";
    echo "minimum :" .min($s);
    echo "<br>"; 
    echo "maximum :" .max($s);
    echo "<br>";

    echo "<pre>";
    print_r($s);
    //echo $s = implode("***",$s);
   // echo $s = implode("and",$s);
    echo $s = implode("---",$s);

    $string = "boy.....cat...bat....book,car...bar";
    $new_array = explode(".",$string);
    print_r($new_array);





    echo "</pre>";
    
    
    
    ?>
    
</body>
</html>