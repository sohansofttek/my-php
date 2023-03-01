<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comparison operator</title>
</head>
<body>
    <?php
    $a = 100;
    $s = "100";
    //value equal hole true dekhabe(==) atate{$a is integer & $s is string}
    var_dump($a == $s);
    echo "<br/>";
    var_dump($a === $s);
    echo "<br/>";

    $q = 20;
    $w = 10;
    var_dump($q >= $w);

    echo "<br/>";
    var_dump($q <= $w);
    
    
    ?>
    
</body>
</html>