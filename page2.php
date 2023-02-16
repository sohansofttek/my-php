<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page 2</title>
</head>
<body>
    <?php
        echo "<pre>";
        print_r($_GET);
        echo "</pre>";
    
        echo "this is page 2 ";
        echo "<br>";
        echo "<a href = 'link-file.php?book name=English For Today &catagory=English&year=2000'> go to link-file page</a>";
    
    ?>
    
</body>
</html>