<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch statement</title>
</head>
<body>
    <?php
    $num = "sohan";
    $num2 = "sohannn";
    // $num2 = "sohan";
    $num3 = "sohan2";
    $num4 = "sohan3";

    switch ($num){
    case $num2:
    echo "num2 <br/>";
        break;
    case $num3:
        echo"num3 <br/>";
        break;

    case $num4 :
        echo "num4 <br/>";
        break;
    default:
        echo "default <br/>";
    
}
    
    
    
    
    ?>
    
</body>
</html>