<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array function</title>
</head>
<body>
    <?php

    $cars = array("toyota" ,"BMW" ,"Roles Royels", "Farrary", "Lember gini" ,"Marcidies");
    $arrlength = count($cars);

    for($x = 0; $x <$arrlength; $x++)
    {
        echo $cars[$x];
        echo "<br/>";
    }
    
    
    
    
    ?>
    
</body>
</html>