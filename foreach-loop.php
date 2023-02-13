<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach loop</title>
</head>
<body>
    <?php
         $array[] = "book";
         $array[] = "chalk";
         $array[] = "beg";
         $array[] = "dog";
         $array[] = "brook";
         $array[] = "talk";


        $array["one"] = "book";
        $array["two"] = "chalk";
        $array["three"] = "beg";
        $array["four"] = "dog";
        $array["five"] = "brook";
        $array["six"] = "talk";

    foreach($array as $key => $value)
    {
        echo $key . ":" . $value. "<br/>";
    }
    
    
    ?>
    
</body>
</html>