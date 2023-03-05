<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>global variable call</title>
</head>
<body>
    <?php
    $s = 599;

    function first(){
        global $s;//declear as e global inside the function
        $a = 10;
        echo $a;
        echo "<br/>";
        echo "Access from first = " . $s;
        echo "<br/>";
        }

function second(){
    global $s;//declear as e global inside the function
    $b = 20 ;
    echo $b;
    echo "<br/>";
    echo "Access from second = " . $s;
}
first();
second();

    
    
    
    
    
    
    
    
    ?>
    
</body>
</html>