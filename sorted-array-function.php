<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sorted array function</title>
</head>
<body>
    <?php
        $cars = array("sohan "=> 34,"satu "=> 10,"tarek "=> 40,"nirob "=> 25);
            asort($cars);//ata kaj kore letter assending order e
            echo "<br/>";
           // ksort($cars);//ata kaj kore value er upore

        foreach($cars as $key => $value){
            echo "key =  ". $key . "value = ". $value . "<br/>";
        }
    
    ?>
    
</body>
</html>