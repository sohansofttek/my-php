<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array functions</title>
</head>
<body>
    <?php
    $cars = array(
        array("sohan",23,1720123),
        array("satu",23,1720122),
        array("tarek",24,1720114)
    );
    for ($row = 0 ; $row <3 ; $row++){
        echo "<p><b>Row nuber $row<b/><p/>";
        echo "<ol>";

        for ($col = 0; $col < 3 ; $col++){
            echo "<li>".$cars [$row][$col]."</li>";
        }
        echo "<ol>";
    }
    
    
    
    ?>
    
</body>
</html>