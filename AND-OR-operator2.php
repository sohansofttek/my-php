<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>and or operators</title>
</head>
<body>
    <?php
        $x = 15;
        $y = 10;

        if($x == 15 && $y == 10){
            //must be needed 2 values are true 
            echo "this is true";
        }
    else{
        echo "this is an error";
    }
    echo "<br/>";

    if($x == 15 || $y == 100){
        //must be needed 2 values are true or 1 value are true
        echo "this is true";
    }
else{
    echo "this is an error";
}
echo "<br/>";

if($x == 15 xor $y == 100){
    //must be needed 1 value are false
    echo "this is true";
}
else{
echo "this is an error";
}

    
    ?>
    
</body>
</html>