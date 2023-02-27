<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string reverse and constants</title>
</head>
<body>
    <?php
    $s = "I am  PHP lover";
    echo ($s)."<br>";
    
    echo strrev ($s)."<br>";
    define("sohan","i am a student");
    function tarek(){
        return sohan ;
    }
    echo tarek();


?>
</body>
</html>