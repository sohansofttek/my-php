<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function1.php</title>
</head>
<body>
    <?php

    function count_to_fifteen(){
    for($s = 0;$s <= 15; $s++){
        echo $s ."<br/>";
    }
    
  
}
count_to_fifteen();

echo "<br>";
count_to_fifteen();
    ?>
</body>
</html>