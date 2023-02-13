<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while loops </title>
</head>
<body>
    <?php
        $count = 0;
        while ($count <= 15)
        {
            if ($count == 6){
                echo "six"."<br/>";
            }

            else{
                echo $count ."<br/>";
            }
            $count = $count + 1 ;
        }
    
    
    
    
    
    
    
    ?>
    
</body>
</html>