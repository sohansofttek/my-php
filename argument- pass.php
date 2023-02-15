<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>argument pass</title>
</head>
<body>
    <?php
        function count_to_ten($a,$b,$c){
            $answer = $a + $b + $c ;
            return $answer ;

        }
        $a = 1;
        $b = 2;
        $c = 3;

        $d = count_to_ten($a,$b,$c);
        echo $d + 10;
    
    
    
    
    ?>
    
</body>
</html>