<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string functions</title>
</head>
<body>
    <?php 
    $mystring = "this is practices php languages";

    echo strtoupper($mystring)."</br>";
    echo strtolower($mystring)."</br>";
    echo trim($mystring,"this")."</br>";
    echo "strstr : ".strstr($mystring,"practices")."</br>";
    echo ucfirst($mystring)."</br>";
    echo ucwords($mystring)."</br>";
    echo "str-replace:".str_replace("php","sql",$mystring)."</br>";
    ?>
</body>
</html>