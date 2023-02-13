<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for loop</title>
</head>
<body>
    <?php
        for($count = 0;$count <=1000;$count++)
        {
            if($count == 5){
                continue;
                // it can move back and miss the count value and print regularly next value
                echo "five" ."<br/>";
            }

            else {
              echo $count . "<br/>";
            }

        }
    
    
    
    
    
    
    
    ?>
    
</body>
</html>